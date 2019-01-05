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
    
    public function getUserGroups($data = array()) {
        $data['order'] = ($data['order'] == 'desc') ? 'desc' : 'asc';
        $sort_columns = array('user_group_id', 'name');
        $data['sort'] = (in_array($data['sort'], $sort_columns)) ? $data['sort'] : 'name';

        $this->db->select('user_group_id, name');
        $this->db->from($this->db->dbprefix . 'user_group');
        $this->db->limit($data['limit'], $data['offset'] == 1 ? 0 : $data['offset']);
        $this->db->order_by($data['sort'], $data['order']);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getTotalUserGroups() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . $this->db->dbprefix . "user_group");

        return $query->row('total');
    }


    public function getVsechnyUzivatele()
    {
        $this->db->select('username, email, id');
        $this->db->where('zobrazit = 1');
        $this->db->or_where('zobrazit = ');
        $this->db->from('users');
        $this->db->order_by('username', 'asc');

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

}
