<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>

    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">

          <form method="get" action="<?= base_url('welcome/index') ?>" class="border">
        
            <input class="form-control" placeholder="cari makanan " type="text" name="search" id="search" />
        
          </form>
      </div>
    </div>

<?php
if (isset($search)) {
  echo "<h4 class='alert alert-success'>Hasil pencarian untuk : " . $search . "</h4>";
}
?>

<div class="container p-4">
  <h4 class="text-center">Makanan Popular</h4>
  <div class="container-fluid py-2 ">
    <div class="row d-flex justify-content-center">
        <?php
        foreach ($records as $idx => $data) {
        ?>
      <div class="col-md-3">
          <div class="card " style="height:350px;">
            <div class="card-header">
              <img src="<?= empty($data['gambar']) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/' . $data['gambar'] ?> " class="card-img-top" alt="<?= $data['nama'] ?>">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?= $data['nama'] ?></h5>
              <p class="card-text">Rp.<?= word_limiter($data['harga'], 20) ?> <a href="<?= base_url("welcome/detail/{$data['id']}") ?>" class="btn btn-sm btn-primary">Detail</a></p>
              <dl>
              </dl>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
  </div>
</div>
	<?php
if (isset($links)) {
   echo $links;
}
include APPPATH . 'views/fragment/footer.php';
?>
