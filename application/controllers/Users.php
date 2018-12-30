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
}
