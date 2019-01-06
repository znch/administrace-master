<html>

<div class="container">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Hlavní</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tabulka</li>
  </ol>
</nav>


<table id="users">
<thead>
<tr><td>Uživatelské jméno</td><td>E-mail</td><td>ID</td></tr>
</thead>
<tbody>
</tbody>
</table>


</div>
</html>

<script type="text/javascript">
$(document).ready(function() {
    $('#users').DataTable();
});
</script>
