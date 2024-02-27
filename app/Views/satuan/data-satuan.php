<?= $this->extend('layout/template') ?>;

<?= $this->section('konten') ?>;

<div class="pagetitle">
    <h1>Data Satuan Produk</h1>
    
</div>

<?php
if (session()->getFlashdata('pesan')) {
    echo session()->getFlashdata('pesan');
}
?>
<div class="row mb-4">
    <div class="col-lg-4">
        <a href="<?= site_url('/tambah-satuan') ?>" class="btn btn-sm btn-primary">Tambah Data Satuan</a>
</div>
</div>
<!-- End Page Title -->
<div class="row">
    <div class="col-lg-12">

    <div class="card">
        <div class="card-body mt-4">

        <!-- Table with stripped rows -->
        <table class="table table striped datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Satuan Produk</th>
                    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
    if(isset($listsatuan)) : //$listsatuan dari controller Satuan.php
    $no = 1 ;
    foreach($listsatuan as $row) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row->nama_satuan; ?></td>
        <td>
        <a href="<?= site_url('edit-satuan/') . $row->id_satuan; ?>" class=" btn btn-sm btn-warning mx-2">edit</a> 
        <a href="<?=site_url('hapus-satuan/'). $row->id_satuan;?>" OnClick="return confirm(\'Apakah anda yakin akan menghapus ini?\') )" class=" btn btn-sm btn-danger">Hapus</a>';
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
