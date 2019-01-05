<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Array_class
 *
 * @author kolacek_jan
 */
class Array_class {
    function __construct() {

    }

    function model2Dropdown($pole)
    {
        $poleVysledku = array();

        foreach($pole as $row)
        {
            $poleVysledku[$row->id] = $row->username;


        }
        return $poleVysledku;
    }
}
