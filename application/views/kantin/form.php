<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<div class="container py-4">
    <form method="post" action="<?= base_url('kantin/save') ?>">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
    <div>
        <label></label>
        <div>
        <h3>Tambah/Ubah kantin</h3>
        </div>
    </div>
    <div class="row mb-3">
        <label class="form-label">Nama kantin</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="nama_kantin" id="nama" value="<?= $nama_kantin ?>" required/>
        </div>
    </div>
    
    
    <div class="row mb-3">
        <label class="form-label">Telpon</label>
        <div class="col-sm-6">
            <input class="form-control" type="tel" name="telpon" id="telpon" value="<?= $telpon ?>" required/>
        </div>
    </div>
    
    
    <div>
        <input class="btn btn-warning" type="button" value="Cancel" onclick="history.back()" />
        <input class="btn btn-primary" type="submit" value="Simpan" />
    </div>
    
    </form>
</div>

<?php 
include APPPATH . 'views/fragment/footer.php' ;
?>
