<?= $this->extend('layout/template');?>
<?= $this->section('konten');?>


<div class="pagetitle">
      <h1>Data Produk</h1>
      
    </div><!-- End Page Title -->

    

        <a class="btn btn-sm btn-primary" href="/tambah-produk">
          <span class="text">Tambah</span>
</a>  

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
               <?php 
               if(isset($listProduk)) :
                $html =null;
                $no = 0;
                foreach($listProduk as $baris) :
                  $no++;
               $html .='<tr>';
               $html .='<td>'. $no.'</td>';     
               $html .='<td>'. $baris['nama_produk'].'</td>';
               $html .='<td>'. $baris['nama_kategori'].'</td>';
               $html .='<td>'. $baris['stok'].'</td>';
               $html .='<td>'. $baris['nama_satuan'].'</td>';
               $html .='<td>'. $baris['harga_jual'].'</td>';
               $html .='<td>
                    <a href="'.site_url('/edit-produk/') . $baris['id_produk'].'" class=" btn btn-sm btn-warning mx-2">edit</a> 
                    <a href="'.site_url('/hapus-produk/'). $baris['id_produk'].'" OnClick="return confirm(\'Apakah anda yakin akan menghapus ini?\') )" class=" btn btn-sm btn-danger">Hapus</a>
                    
               </td>';
            $html .='</tr>';
                endforeach;
                echo $html;
              endif;
            ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    

<?= $this->endsection();?>