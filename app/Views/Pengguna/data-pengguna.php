<?= $this->extend('layout/template') ?>;

<?= $this->section('konten') ?>;

<div class="pagetitle">
    <h1>Data Pengguna</h1>
    
</div>

<?php
if (session()->getFlashdata('pesan')) {
    echo session()->getFlashdata('pesan');
}
?>
<div class="row mb-4">
    <div class="col-lg-4">
        <a href="<?= site_url('/tambah-pengguna') ?>" class="btn btn-sm btn-primary">Tambah Data Pengguna</a>
</div>
</div>
<!-- End Page Title -->
<div class="row">
    <div class="col-lg-12">

    <div class="card">
        <div class="card-body mt-4">

        <!-- Table with stripped rows -->
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Password</th>
                    <th>Username<th>
                    <th>Level</th>
                    <th>Aksi</th>

</tr>
</thead>
<tbody>
<?php
    if(isset($listPengguna)) : //$listsatuan dari controller Satuan.php
    $no = 1 ;
    foreach($listPengguna as $row) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row->nama_pengguna; ?></td>
        <td><?= $row->password; ?></td>
        <td><?= $row->username; ?></td>
        <td><?= $row->level; ?></td>
        <td align="right">
            <a href="<?= site_url('edit-pengguna/') . $row->id_pengguna; ?>" class=" btn btn-warning btn-sm">edit</a> 
            <a href="<?= site_url('hapus-pengguna/'). $row->id_pengguna; ?>" OnClick="return confirm(\'Apakah anda yakin akan menghapus ini?\') )" class=" btn btn-danger btn-sm">Hapus</a>';
        </td>
    </tr>
       
     <?php endforeach;    
      endif;
      ?>
</tbody>
</table>
<!-- End Table with stripped rows -->

</div>
</div>

</div>
</div>

<?= $this->endSection(); ?>
