<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use App\Models\MProduk;

class PdfController extends BaseController
{
    public function index()
    {
        $data =[
            'listProduk'=>$this->produk->getLaporanproduk()
        ];
        return view('laporan/pdf',$data);
    }

public function generate()
    {
        $filename = date('y-m-d-h-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $data =[
            'listProduk'=>$this->produk->getLaporanProduk()
        ];
        $html = view('laporan/pdf', $data);
        $dompdf->loadHtml($html);

        // (optimal) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as pdf
        $dompdf->render();

        // output the generate pdf
        $dompdf->stream($filename);
    }


    public function laporanpenjualan()
    {
        $data =[
            'listPenjualan'=>$this->penjualan->getPenjualan()
        ];
        return view('Laporan/data-laporan-penjualan',$data);
    }

public function generatepenjualan()
    {
        $filename = date('y-m-d-h-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $data =[
            'listPenjualan'=>$this->penjualan->getPenjualan()
        ];
        $html = view('Laporan/pdf-penjualan', $data);
        $dompdf->loadHtml($html);

        // (optimal) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as pdf
        $dompdf->render();

        // output the generate pdf
        $dompdf->stream($filename);
    }
}
