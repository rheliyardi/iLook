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
                  <form class="forms-sample" action="<?= site_url('proses-edit-produk/') . $listProduk['id_produk']; ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Produk</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Produk" name="nama_produk" value="<?=$listProduk['nama_produk'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Harga Jual</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Harga Jual" name="harga_jual" value="<?=$listProduk['harga_jual'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Satuan</label>
                            <select  id="floatingSelect" class="form-control" aria-label="State" name="nama_satuan">
                      <?php
                         foreach ($listSatuan as $row){
                          $row['id_satuan']==$listProduk['id_satuan'] ? $pilih='selected' : $pilih=null;
                          echo'<option '.$pilih.' value="'.$row['id_satuan'].'">'.$row['nama_satuan'].'</option>';   
                                }
                    ?>

                            </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Kategori</label>
                      <select name="nama_kategori" id="floatingSelect" class="form-control" aria-label="State">
                      <?php
                         foreach ($listKategori as $row){
                          $row['id_kategori']==$listProduk['id_kategori'] ? $pilih='selected' : $pilih=null;
                          echo '<option '.$pilih.' value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
                         }
                      ?>                        
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Stok</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Stok" name="stok" value="<?=$listProduk['stok'];?>">
                    </div>
                   
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

            <?= $this->endSection(); ?>
