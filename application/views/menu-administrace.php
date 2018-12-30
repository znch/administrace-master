<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('admin/dashboard') ?>">Administrace</a>
        </div>
        <ul class="nav navbar-nav">
           <li><?php echo anchor('admin/users', 'Uživatelé'); ?></li>
           <li><?php echo anchor('admin/categories', 'Kategorie'); ?></li>
           <li><?php echo anchor('admin/articles', 'Články'); ?></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text"><?php echo $this->user->first_name." ".$this->user->last_name; ?></p></li>
      <li><?php echo anchor('admin/logout', '<span class="fa fa-sign-out"></span> Odhlásit'); ?></li>
    </ul>
    </div>
</nav>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
