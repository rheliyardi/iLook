<?= $this->extend('layout/template') ?>;

<?= $this->section('konten') ?>;


<div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="<?= site_url('proses-edit-kategori/') . $listKategori['id_kategori']; ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Kategori</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kategori" name="nama_kategori" value="<?=$listKategori['nama_kategori'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

            <?= $this->endSection(); ?>
