<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Tambah/Ubah Makanan</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<div class="container py-5">

    
    <form method="post" enctype="multipart/form-data" action="<?= base_url('makanan/save') ?>">
    <input type="hidden"  name="id" value="<?= isset($id) ? $id : '' ?>"/>
    <input type="hidden"  name="gambar_lama" value="<?= isset($gambar) ? $gambar : '' ?>"/>
    
    <div>
        <label class="form-label">nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama ?>" required />
    </div>
    
    <div>
        <label class="form-label" >harga</label>
        <input type="text" class="form-control" name="harga" id="harga" value="<?= $harga ?>" required />
    </div>
    
    <div>
        <label class="form-label">gambar</label>
        <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" onchange="loadFile(event)"/>
        <img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/'.$gambar ?>" 
        height="120" width="120"/>
    </div>
    
    
    
    
    
    <div class="py-3">
        <label class="form-label">Tersedia</label>
        <input type="radio" name="stok" id="stok" value="1" <?= $stok == '1' ? 'checked' : '' ?> />stok
        <input type="radio" name="stok" id="stok" value="0" <?= $stok == '0' ? 'checked' : '' ?>/>Tidak tersedia
    </div>
    
    <div>
        <label class="form-label">Pilih Kantin</label>
    
        <select class="form-select" name="id_kantin" id="id_kantin">
                        <?php
                        // $idx = row ke-x, $row => datanya
                        foreach ($kantins as $idx => $row) {
                        ?>
                            <option value="<?= $row['id'] ?>" <?= $id_kantin == $row['id'] ? 'selected' : '' ?>>
                                <?= $row['nama_kantin'] ?></option>
                        <?php
                        }
                        ?>
         </select>
    </div>
    
    
    <div class="py-5">
    <input type="button" class="btn btn-warning" value="Cancel" onclick="history.back()" />
        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Simpan"/>
    </div>
    
    </form>
</div>

<script>
var loadFile = function(event) {
	var image = document.getElementById('preview');
	image.src = URL.createObjectURL(event.target.files[0]);
}

</script>
<?php 
include APPPATH . 'views/fragment/footer.php' ;
?>