<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author zdrh
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('validation_pomocne');
        $this->load->library('objectclass');
    }

    /*
     * uvodní stránka
     */

    public function index() {
        $data["title"] = "Úvodní stránka";
        $data["main"] = "frontend/index";
        $this->layout->generate($data);
    }

    /*
     * přihlašovací formulář
     */

    public function login() {

        $data["title"] = "Přihlášení";
        $data["main"] = "frontend/loginPage";
        $data["message"] = $this->session->flashdata('message');
        $this->layout->generate($data);
    }

    /*
     * zpracování přihlášení 
     */

    function loginFinish() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $return = $this->ion_auth->login($username, $password);

//přihlášení ok
        if ($return) {
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('message', 'Nesprávné uživatelské jméno nebo heslo');
            redirect('login');
        }
    }

    function register1() {
        $data["title"] = "Registrace";
        $data["main"] = "frontend/registerForm1";
        $this->layout->generate($data);
    }

    function registerFinish1() {

        //pole z formuláře
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $email = $this->input->post('email');
        $confirm = $this->input->post('confirm');



        if ($password == $confirm) {

            $additional_data = array(
                'first_name' => $name,
                'last_name' => $surname
            );
            $this->ion_auth->register($username, $password, $email, $additional_data);
            $this->session->set_flashdata('message', 'Účet byl vytvořen, můžeš se přihlásit');
            redirect('login');
        } else {
            $this->session->set_flashdata('message', 'Hesla se neshodují');
            redirect('register1');
        }
    }

    function register2() {

        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');
        $omezeni = array($password_min, $password_max);
        $data["omezeni"] = $omezeni;
        $data["title"] = "Registrace";
        $data["main"] = "frontend/registerForm2";
        $this->layout->generate($data);
    }

    function registerFinish2() {

        //načtení konfiguračních proměnných
        $tables = $this->config->item('tables', 'ion_auth');
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');

        //pole z formuláře
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $email = $this->input->post('email');
        $confirm = $this->input->post('confirm');


        //podmínky polí
        $this->form_validation->set_rules('name', 'jméno', 'required');
        $this->form_validation->set_rules('surname', 'příjmení', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'uživatelské jméno', 'required|is_unique[' . $tables['users'] . '.username]');
        $this->form_validation->set_rules('password', 'heslo', 'required|min_length[' . $password_min . ']|max_length[' . $password_max . ']|matches[confirm]');
        $this->form_validation->set_rules('confirm', 'potvrzení hesla', 'required');

        $return = $this->form_validation->run();
        if ($return) {
            $additional_data = array(
                'first_name' => $name,
                'last_name' => $surname
            );
            $this->ion_auth->register($username, $password, $email, $additional_data);
            $this->session->set_flashdata('message', 'Účet byl vytvořen, můžeš se přihlásit');
            redirect('login');
        } else {
            $inputs = array('name', 'surname', 'email', 'username', 'password', 'confirm');
            $errors = $this->validation_pomocne->inputsArray($this->form_validation->error_array(), $inputs);
            $this->session->set_flashdata('message', $errors);
            
            redirect('register2');
        }
    }

    function register3() {
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');
        $omezeni = array($password_min, $password_max);
        $inputs = array('name', 'surname', 'email', 'username', 'password', 'confirm');
        
        if(!isset($this->session->data)) {
            $data = $this->validation_pomocne->createFreeArray($inputs);
            $this->session->set_flashdata('data', $data);
        }
        
        $data["omezeni"] = $omezeni;
        $data["title"] = "Registrace";
        $data["main"] = "frontend/registerForm3";
        $this->layout->generate($data);
    }

    function registerFinish3() {
        //načtení konfiguračních proměnných
        $tables = $this->config->item('tables', 'ion_auth');
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');

        //pole z formuláře
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $email = $this->input->post('email');
        $confirm = $this->input->post('confirm');


        //podmínky polí
        $this->form_validation->set_rules('name', 'jméno', 'required');
        $this->form_validation->set_rules('surname', 'příjmení', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'uživatelské jméno', 'required|is_unique[' . $tables['users'] . '.username]');
        $this->form_validation->set_rules('password', 'heslo', 'required|min_length[' . $password_min . ']|max_length[' . $password_max . ']|matches[confirm]');
        $this->form_validation->set_rules('confirm', 'potvrzení hesla', 'required');

        $return = $this->form_validation->run();
        if ($return) {
            $additional_data = array(
                'first_name' => $name,
                'last_name' => $surname
            );
            $this->ion_auth->register($username, $password, $email, $additional_data);
            $this->session->set_flashdata('message', 'Účet byl vytvořen, můžeš se přihlásit');
            redirect('login');
        } else {
            
            $inputs = array('name', 'surname', 'email', 'username', 'password', 'confirm');
            $values = array($name, $surname, $email, $username, '', '');
            $data = $this->validation_pomocne->createData($inputs, $this->form_validation->error_array(), $values);
            
            $this->session->set_flashdata('data', $data);
            
            redirect('register3');
        }
    }

}
