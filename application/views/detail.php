<?php
  include APPPATH . 'views/fragment/header.php'; 
  include APPPATH . 'views/fragment/menu.php' ;
?>
<div class="card col-sm-8 container d-flex align-items-center justify-content-center">
<img src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/'.$gambar?>" class="card-img-top" alt="<?= $nama ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $nama ?></h5>
      <dl><dt>Harga</dt>
        <p class="card-text"><?= $harga ?>
          <dt>Nama Kantin</dt>
          <dd><?= $nama_kantin ?></dd>
          <dt>Stok</dt>
          <dd><?= $stok ?></dd>
      </dl>
     
    </div>
  </div>
<a href='#' onclick="history.back()">Back</a>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>
