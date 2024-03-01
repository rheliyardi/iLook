<!DOCTYPE <html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/feather/feather.css');?>">
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/mdi/css/materialdesignicons.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/ti-icons/css/themify-icons.css');?>">
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/typicons/typicons.css');?>">
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/simple-line-icons/css/simple-line-icons.css');?>">
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/css/vendor.bundle.base.css');?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('/StarAdmin/assets/js/select.dataTables.min.css');?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url('/StarAdmin/assets/css/vertical-layout-light/style.css');?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('/StarAdmin/assets/images/favicon.png');?>/>">
  
  <style>
    table{
        margin: 0 auto;
        width:80%;
        border-collapse: collapse;
    }
    th, td{
        border: 1px solid black;
        padding: 8px;
    }
    th{
        background-color: #B0C4DE;
    }
  </style>

    <title> Download PDf Laporan</title>

</head>

<body>
    <h2 align="center">iLook<br/>
    Laporan Penjualan<br/>
Per <?=date('d-M-Y');?> </h2>
    <table border=1 width=80% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">
        <thead>
            <tr bgcolor=silver align=center>
                <td width="5%">No</td>
                <td width="25%">No Transaksi</td>
                <td width="50%">Tanggal Penjualan</td>
                <td width="20%">Total</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($listPenjualan)) :
                $no = 0; // inisialisasi nomor
                foreach ($listPenjualan as $baris) :
                    $no++;
            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $baris->no_transaksi ?></td>
                        
                        <td><?= $baris->tgl_penjualan ?></td>
                        <td><?= $baris->total ?></td>
                    </tr>
            <?php
                endforeach;
            endif;
            ?>

        </tbody>
    </table>

<p style="margin-left:450px">Mengetahui,<br/>
Petugas Penjualan<br/>
<br/>
<br/>
<b><em>Ina</em></b>
</p>

<p><small><em>Digenerate oleh aplikasi iLook $copy; <?=date('d-m-Y H:i:s');?>wib</em></small></p>

</body>

</html>