<?php




class DefaultView extends CI_Controller
{
  public function __construct() {
      parent::__construct();
      $this->load->model('Admin_model');

    }


    function default() {
        $data["title"] = "Úvodní stránka";
        $data["main"] = "default";
        $this->layout->generate($data);
    }

    function strouhanka() {
      $data["title"] = "Drobečková navigace";
      $data["main"] = "frontend/strouhanka";
      $this->layout->generate($data);


    }

    function tabulka() {
      $data['users'] = $this->Admin_model->getVsechnyUzivatele();

      $data["title"] = "Tabulka s řazením";
      $data["main"] = "frontend/tabulka";
      $this->layout->generate($data);

    }



}

 ?>
