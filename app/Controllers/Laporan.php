<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Laporan extends BaseController
{
    public function datalaporan()
    {
        $data = [
            'listLaporan' =>$this->produk->getStok()
    ];
    return view('laporan/data-laporan',$data);
        
    }

    public function datalaporanpenjualan()
    {
        $data = [
            'listPenjualan' =>$this->penjualan->getPenjualan()
    ];
    return view('laporan/data-laporan-penjualan',$data);
        
    }
}

