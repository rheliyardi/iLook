<?= $this->extend('layout/template') ?>;

<?= $this->section('konten') ?>;


<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="<?=site_url('simpan-produk');?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Produk</label>
                      <input type="text" class="form-control" id="InputJenis"name="nama_produk">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Kategori</label>
                      <select name="kategori" id="floatingSelect" class="form-control" aria-label="State">
                        <option value=""></option>
                        <?php
                         foreach ($listKategori as $row){
                          echo'<option value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
                         }
                      ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Stok</label>
                      <input type="text" class="form-control" id="InputJenis"name="stok">
                    </div>
                    <div class="col-md-12">
                    <label for="exampleInputUsername1">Satuan</label>
                            <div class="form-floating">
                            <select  id="floatingSelect" class="form-control" aria-label="State" name="satuan">
                            <option value=""></option>
                        <?php
                         foreach ($listSatuan as $row){
                          echo'<option value="'.$row['id_satuan'].'">'.$row['nama_satuan'].'</option>';   
                                }
                    ?>            
                    </select> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Harga Jual</label>
                      <input type="tetx" class="form-control" id="InputJenis"name="harga_jual">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


            <?= $this->endSection(); ?>
