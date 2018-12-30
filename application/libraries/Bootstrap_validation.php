<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bootstrap_Validation
 *
 * @author zdrh
 */
class Bootstrap_Validation {
    //put your code here
    
    function __construct() {
        
    }
    
    //creates array with messages for 
    function createDataForView($array, $errors, $successForm = "has-success", $successIcon = "fa-check", $errorForm = "has-error", $errorIcon = "fa-times")
    {
        foreach ($array as  $key => $row) {
            if(array_key_exists($key, $errors)) {
                $array[$key]['message'] = $errors[$key];
                $array[$key]['statusForm'] = $errorForm;
                $array[$key]['statusIcon'] = $errorIcon;
            } else {
                $array[$key]['message'] = '';
                $array[$key]['statusForm'] = $successForm;
                $array[$key]['statusIcon'] = $successIcon;
            }
        }
        
        return $array;
    }
}
