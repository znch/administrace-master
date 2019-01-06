<html>

<div class="container">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Hlavní</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tabulka</li>
  </ol>
</nav>


<table id="book-table" class="table table-bordered table-striped">
<thead>
<tr><td>Název knihy</td><td>Cena knihy (£)</td><td>Autor</td><td>Hodnocení</td><td>Nakladatelství</td></tr>
</thead>
<tbody>
</tbody>
</table>


<script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable({
        "ajax": {
            url : "<?php echo site_url("DefaultView/books_page") ?>",
            type : 'GET'
        },
    });
});
</script>
