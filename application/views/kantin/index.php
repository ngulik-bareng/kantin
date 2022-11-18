<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Daftar Kantin</h1>
<div class="d-flex justify-content-end">
	<a class="btn btn-primary btn-sm" href="<?= base_url("kantin/form")?>">Tambah</a>
</div>
<br/>
<table class="table table-striped"> 
    <tr class="bg-secondary text-light">
        <th>Nama Kantin</th>
   
        <th>Telpon</th>
     
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['nama_kantin'] ?></td>
       
            <td><?= $data['telpon'] ?></td>
          
            <td>
				<div class="btn-group">
					<a class="btn btn-primary btn-sm" href="<?= base_url("kantin/detail/{$data['id']}")?>">Detail</a>
					<a class="btn btn-warning btn-sm" href="<?= base_url("kantin/form/{$data['id']}")?>">Edit</a>
					<a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("kantin/hapus/{$data['id']}")?>">Hapus</a>
				</div>
			</td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>
