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
                  <form class="forms-sample" action="<?= site_url('proses-edit-pengguna/') . $listPengguna['id_pengguna']; ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Pengguna</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Pengguna" name="nama_pengguna" value="<?=$listPengguna['nama_pengguna'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

            <?= $this->endSection(); ?>
