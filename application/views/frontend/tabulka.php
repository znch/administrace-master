<div class="container">
  <!--
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Hlavní</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tabulka</li>
  </ol>
</nav>
-->
<?php
?>
<div class="table-responsive">
<table class="table table-striped">
   <thead>
       <tr>
           <?php if ($this->uri->segment(4) == true) { ?>
           <th class="text-left"><a href="<?php echo $order;?>" class="<?php echo $this->uri->segment(4);?>">User Group ID</a></th>
           <?php } else { ?>
           <th class="text-left"><a href="<?php echo $order;?>" class="asc">User Group ID</a></th>
           <?php }?>
           <?php if ($this->uri->segment(4) == true) { ?>
           <th class="text-left"><a href="<?php echo $order;?>" class="<?php echo $this->uri->segment(4);?>">Name</a></th>
           <?php } else { ?>
           <th class="text-left"><a href="<?php echo $order;?>" class="asc">Name</a></th>
           <?php }?>
           <td class="text-right">Action</td>
       </tr>
   </thead>
   <tbody>
       <?php if ($users_groups) { ?>
       <?php foreach ($users_groups as $user_group) { ?>
       <tr>
       <td class="text-left"><?php echo $user_group['user_group_id']; ?></td>
       <td class="text-left"><?php echo $user_group['name']; ?></td>
       </tr>
       <?php } ?>
       <?php } else { ?>
       <tr>
       <td class="text-center" colspan="3">No Results</td>
       </tr>
       <?php } ?>
       <br/>
       <br/>
       <?php echo $pagination; ?>
   </tbody>
</table>
</div>

<?php
?>




</div>
