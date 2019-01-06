<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_model
 *
 * @author kolacek_jan
 */
class Admin_model extends CI_Model{


    function __construct() {
        parent::__construct();
    }

    public function getVsechnyUzivatele()
    {
        $this->db->select('username, email, id');
        $this->db->where('zobrazit = 1');
        $this->db->or_where('zobrazit = ');
        $this->db->from('users');
        $this->db->order_by('id', 'asc');

        $result = $this->db->get()->result();
        return $result;

    }

    public function setUser($id, $username, $email, $password)
    {
        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'email' => $email


        );

        $this->db->insert('users', $data);
    }

    function getMaxID()
    {
        $this->db->select('Max(id) as max', false);
        $this->db->from('users');

        $result = $this->db->get()->result();
        return $result[0]->max;

    }

    function setDeleteUser($id)
    {
        $pole = array(
            'zobrazit' => 0
        );

        $this->db->where('id', $id);
        $this->db->update('users', $pole);


    }

    function getEditUser($id)
    {
      $this->db->select('id, username, email');
      $this->db->from('users');
      $this->db->where('id', $id);
      $data = $this->db->get()->result();
      return $data[0];


    }


    public function setEditUser($id, $username, $email)
    {
      $data = array(
        'id' => $id,
        'username' => $username,
        'email' => $email

      );
      $this->db->where('id', $id);
      return $this->db->update('users', $data);

    }

    public function get_books()
    {
         return $this->db->get("books");
    }

}
