<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author zdrh
 */
class Users extends Admin_controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('layout/layout_main-logged');
        $this->load->model('Admin_model');
    }


    function index() {
        $data['users'] = $this->Admin_model->getVsechnyUzivatele();


        $data['title'] = "Administrace uživatelů";
        $data['main'] = 'backend/users';
        $this->layout->generate($data);
    }


    function addUser() {
        $this->load->library('array_class');
        $user = $this->Admin_model->getVsechnyUzivatele();
        $data['user'] = $this->array_class->model2Dropdown($user);

        $data['title'] = "Přidejte nového uživatele";
        $data['main'] = "backend/adduser";
        $this->layout->generate($data);

    }


    function addUserFinal()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $id = $this->Admin_model->getMaxID() + 1;

        $return = $this->Admin_model->setUser($id, $username, $email, $password);
        redirect('admin/users');
    }

    function deleteUser($id)
    {
        $this->Admin_model->setDeleteUser($id);
        redirect('admin/users');
    }

    function editUser($id)
    {
        $data['user'] = $this->Admin_model->getEditUser($id);
        $data['id'] = $id;

        $data['title'] = "Upravení uživatele";
        $data['main'] = "backend/editUser";
        $this->layout->generate($data);



    }

    function editUserFinal($id)
    {
      $id = $this->input->post('id');
      $username = $this->input->post('username');
      $email = $this->input->post('email');

      $return = $this->Admin_model->setEditUser($id, $username, $email);
      redirect('admin/users');


    }



}
