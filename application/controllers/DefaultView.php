<?php




class DefaultView extends CI_Controller
{
  public function __construct() {
      parent::__construct();


    }


    function default() {
        $data["title"] = "Úvodní stránka";
        $data["main"] = "default";
        $this->layout->generate($data);
    }





}





 ?>
