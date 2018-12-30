<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author zdrh
 */
class Dashboard extends Admin_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->layout->setLayout('layout/layout_main-logged');
    }

    public function dashboard() {

        $data['title'] = "Dashboard";
        $data['main'] = 'backend/dashboard';
        $this->layout->generate($data);
    }

    function logout() {
        $this->ion_auth->logout();
        redirect('');
    }

}
