<?php




class DefaultView extends CI_Controller
{
  public function __construct() {
      parent::__construct();
      $this->load->model('Admin_model');

    }


    function defaultPage() {
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
      $data['users'] = $this->Admin_model->get_books();

      $data["title"] = "Tabulka s řazením";
      $data["main"] = "frontend/tabulka";
      $this->layout->generate($data);

    }

    public function books_page()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $books = $this->Admin_model->get_books();

          $data = array();

          foreach($books->result() as $r) {

               $data[] = array(
                    $r->name,
                    $r->price,
                    $r->author,
                    $r->rating . "/10 Stars",
                    $r->publisher
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $books->num_rows(),
                 "recordsFiltered" => $books->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }



}

 ?>
