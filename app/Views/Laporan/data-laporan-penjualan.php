<?= $this->extend('layout/template') ?>;

<?= $this->section('konten') ?>;


<div class="pagetitle">
      <h1>Data Laporan Penjualan</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <a class="btn btn-sm btn-danger" aria-current="true" href="<?= site_url('/pdf-penjualan/generate-penjualan') ?>">

                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    <span class="text">Download PDF</span>
                                </a>
                            </div>
                        </div>
                        <!-- Floating Labels Form -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Transaksi</th>
                                    <th>Tanggal Penjualan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php 
                                if (isset($listPenjualan)) :
                                foreach ($listPenjualan as $row) : ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $row->no_transaksi; ?>
                                        </td>
                                        <td>
                                            <?= $row->tgl_penjualan; ?>
                                        </td>
                                        <td>
                                            <?= $row->total; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; 
                                endif;
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>