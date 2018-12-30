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
        $this->db->from('users');
        $this->db->order_by('username', 'asc');
        
        $result = $this->db->get()->result();
        return $result;
        
    }
    
    
}
