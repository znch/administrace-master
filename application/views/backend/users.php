<div class="container">
<h1>Administrace uživatelů</h1>
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard')?>">Administrace</a></li>
    <li class="breadcrumb-item active" aria-current="page">Uživatelé</li>
  </ol>
</nav>


<br>


<div class="ta-center">

<ul class="nobullets">
  <li>
    <a href="<?php echo base_url('admin/users/add-user')?>" class="btn btn-info" role="button">Vytvořit uživatele</a>
  </li>
</ul>

</div>
<br>
<br>

<?php



$hlavicka = array(
    'Uživatelské jméno', 'E-mail', 'ID'
);

$this->table->set_heading($hlavicka);


foreach($users as $row)
{

        $dataButton = array(
              'type' => 'submit',
              'name' => 'delete',
              'content' => '<span class="glyphicon glyphicon-trash"></span>',
              'class' => 'btn btn-danger'


          );

        $editButton = array(
              'type' => 'submit',
              'name' => 'edit',
              'content' => '<span class="glyphicon glyphicon-pencil"></span>',
              'class' => 'btn btn-info'

          );


        $delete = form_open('admin/users/delete-user/'.$row->id).form_button($dataButton).form_close();
        $edit = form_open('admin/users/edit-user/'.$row->id).form_button($editButton).form_close();

        $data = array(

        $row->username,
        $row->email,
        $row->id,
        $delete,
        $edit

    );
    $this->table->add_row($data);


}


$template = array(
        'table_open'            => '<table class="table table-striped">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>', 

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$this->table->set_template($template);
echo $this->table->generate();




?>
</div>
