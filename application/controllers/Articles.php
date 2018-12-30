<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articles
 *
 * @author zdrh
 */
class Articles extends Admin_controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('layout/layout_main-logged');
    }
    
    function index() {
        $data['title'] = "Administrace článků";
        $data['main'] = 'backend/articles';
        $this->layout->generate($data);
    }
}
