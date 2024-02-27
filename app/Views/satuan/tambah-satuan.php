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
                  <form class="forms-sample" action="/simpan-satuan" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Satuan</label>
                      <input type="text" class="form-control" id="InputJenis"name="id_satuan">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

            <?= $this->endSection(); ?>
