<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>

<div class="container py-5">

  <h1>Detail Kantin</h1>
  <dl>
    <dt>Nama Kantin</dt>
    <dd><?= $nama_kantin ?></dd>
  
  
    <dt>Telpon</dt>
    <dd><?= $telpon ?></dd>
  
  </dl>
</div>

<a  class="btn btn-dark" href='#' onclick="history.back()">Back</a>

<?php 
include APPPATH . 'views/fragment/footer.php' ;
?>