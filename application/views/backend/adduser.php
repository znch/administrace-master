<div class="container">
<h1>Vytvořit nového uživatele</h1>

<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Administrace</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/users'); ?>">Uživatelé</a></li>
    <li class="breadcrumb-item active" aria-current="page">Vytvořit nového uživatele</li>
  </ol>
</nav>
<br>





<?php


$attributes = array(
    'class' => 'form-horizontal'
);


echo form_open('admin/users/add-user-final', $attributes);
?>

<div class="form-group">
    <label class="control-label col-sm-2" for="username">Uživatlské jméno:</label>
    <div class="col-sm-5">
      <input name="username" type="text" class="form-control" id="username" placeholder="Napište uživatelské jméno">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">E-mail:</label>
    <div class="col-sm-5">
      <input name="email" type="text" class="form-control" id="email" placeholder="Napište e-mailovou adresu">
    </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="password">Heslo:</label>
      <div class="col-sm-5">
        <input name="password" type="password" class="form-control" id="password" placeholder="Napište heslo">
      </div>
    </div>

<div class="form-group">
    <div class="ba-ma-left">
        <button type="submit" class="btn btn-default">Odeslat</button>
    </div>
</div>

<?php


echo form_close();
?>
</div>
