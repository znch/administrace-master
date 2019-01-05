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

    function strouhanka() {
      $data["title"] = "Drobečková navigace";
      $data["main"] = "frontend/strouhanka";
      $this->layout->generate($data);


    }

    function tabulka() {
      $data["title"] = "Tabulka s řazením";
      $data["main"] = "frontend/tabulka";
      $this->layout->generate($data);



    }

    public function index() {
        $sort = $this->uri->segment(4);

           if (!$sort) {
            $sort = 'asc';
           }

           $this->getList('name, user_group_id', $sort);
    }


    public function getList($sort = 'name, user_group_id', $order = 'asc', $offset = 0) {

        $data['users_groups'] = array();

        $filter_data = array(
            'limit' => "20",
            'offset' => $this->uri->segment(5),
            'sort' => $sort,
            'order' => $order
        );

        $total_rows = $this->model_user_user_group->getTotalUserGroups();

        $results = $this->model_user_user_group->getUserGroups($filter_data);

        foreach ($results as $result) {
            $data['users_groups'][] = array(
                'user_group_id' => $result['user_group_id'],
                'name' => $result['name']
            );
        }

        $this->load->library('pagination');

               $config['base_url'] = base_url('admin/user/users_groups/'.$order);
               $config['total_rows'] = $total_rows;
               $config['per_page'] = "20";
               $config['num_links'] = 16;
               $config['full_tag_open'] = "<ul class='pagination'>";
           $config['full_tag_close'] ="</ul>";
           $config['num_tag_open'] = '<li>';
           $config['num_tag_close'] = '</li>';
           $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
           $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
           $config['next_tag_open'] = "<li>";
           $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        
        $rep_order = '';
        if ($order) {
            if ($order == 'asc') {
                  $rep_order = 'desc';
            } elseif ($order == 'desc') {
                  $rep_order = 'asc';
            }
             $data['order'] = site_url('admin/user/users_groups/'. $rep_order);
        } else {
            $data['order'] = site_url('admin/user/users_groups/'. $rep_order);
        }
        return $this->load->view('template/user/user_group_list', $data);
    }


}

 ?>
