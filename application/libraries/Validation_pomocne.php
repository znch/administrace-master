<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validation_pomocne
 *
 * @author zdrh
 */
class Validation_pomocne {
    //put your code here
    
    
    function __construct() {
        
    }
    /**
     * 
     * @param type $errorArray - pole s chybovými hláškami, klíčem je název vstupního pole, hodnotou je text chybové hlášky
     * @param type $inputs - seznam všech polí ve formuláři, numerické pole
     */
    function inputsArray($errorArray, $inputs) {
        foreach($inputs as $row) {
            if(!array_key_exists($row, $errorArray)) {
                $errorArray[$row] = "";
            }
        }
        
        return $errorArray;
    }
    
    function createData($inputs, $errorArray, $values) {
       
        
        
        $ci = & get_instance();
        $ci->load->library('objectclass');       
        $vysledek = array();
        
       
        foreach($inputs as $key => $row) {
            if(array_key_exists($row, $errorArray)) {
               $status = "has-error"; 
               $message = $errorArray[$row];
            } else {
                $status = "has-success";
                $message = "";
            }
            $object = new ObjectClass();
            $object->setParams($status, $values[$key], $message);
            $vysledek[$row] = $object;
            
        }
        
        return $vysledek;
        
    }
    
    function createFreeArray($inputs) {
        $ci = & get_instance();
        $ci->load->library('objectclass');       
        $vysledek = array();
        
        foreach($inputs as $value) {
            $object = new ObjectClass();
            $object->setParams('', '', '');
            $vysledek[$value] = $object;
        }
        
        return $vysledek;
    }
}
