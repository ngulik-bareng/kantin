<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Daftar Makanan</h1>
<div class="d-flex justify-content-end mb-3">
    <a class="btn btn-primary" href="<?= base_url("makanan/form") ?>">Tambah</a>
</div>
<table class="table table-bordered">
    <tr class="bg-secondary text-bg-light">
        <th>Nama</th>
        <th>Harga</th>
        <th>Nama Kantin</th>
        <th>Stok</th>
        <th>Aksi</th>
       
    </tr>
    <?php
    foreach ($records as $idx => $data) {
    ?>
        <tr>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['harga'] ?></td>
            <td><?= $data['nama_kantin'] ?></td> 
            <td><?= $data['stok'] == '1' ? 'stok' : 'tidak tersedia' ?></td>
            <td class="btn btn-group">
                <a class="btn btn-info" href="<?= base_url("makanan/detail/{$data['id']}") ?>">Detail</a>
                <a  class="btn btn-success" href="<?= base_url("makanan/form/{$data['id']}") ?>">Edit</a>
                <a  class="btn btn-danger" onclick="return confirm('menghapus data?')" href="<?= base_url("makanan/hapus/{$data['id']}") ?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php';
?>