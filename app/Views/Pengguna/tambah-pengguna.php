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
                  <form class="forms-sample" action="/simpan-pengguna" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Pengguna</label>
                      <input type="text" class="form-control" id="InputJenis"name="namaPengguna">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Password</label>
                      <input type="text" class="form-control" id="InputJenis"name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">User Name</label>
                      <input type="text" class="form-control" id="InputJenis"name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Level</label>
                      <select class="form-control" id="InputJenis"name="level">
                               <option value="admin">Administrator</option>
                               <option value="kasir">Kasir</option> 
                      </select>  

                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

            <?= $this->endSection(); ?>