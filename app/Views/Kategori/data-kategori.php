<?= $this->extend('layout/template') ?>;

<?= $this->section('konten') ?>;

<div class="pagetitle">
    <h1>Data Kategori Produk</h1>
   
</div>

<?php
if (session()->getFlashdata('pesan')) {
    echo session()->getFlashdata('pesan');
}
?>
<div class="row mb-4">
    <div class="col-lg-4">
        <a href="<?= site_url('tambah-kategori') ?>" class="btn btn-sm btn-primary">Tambah Data Kategori</a>
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
                    <th>Nama Kategori Produk</th>
                    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
    if(isset($listkategori)) : //$listsatuan dari controller Satuan.php
        $no = 1 ;
        foreach($listkategori as $row) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->nama_kategori; ?></td>
            <td>
            <a href="<?= site_url('edit-kategori/') . $row->id_kategori; ?>" class=" btn btn-warning btn-sm">edit</a> 
            <a href="<?= site_url('hapus-kategori/'). $row->id_kategori; ?>" OnClick="return confirm(\'Apakah anda yakin akan menghapus ini?\') )" class=" btn btn-danger btn-sm">Hapus</a>';
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
    