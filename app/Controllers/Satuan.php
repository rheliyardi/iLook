<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Satuan extends BaseController
{
    public function tampilSatuan()
    {
        if(session()->get('levelPengguna')=='admin'){

        $data = [
            'listsatuan' => $this->satuan->getAllSatuan() //getAllSatuan dapet dari MSatuan.php
         ];

        //return view('nama_folder/nama_file tanpa ekstensi');
        return view('Satuan/data-satuan', $data);
    } else {

        return redirect()->to('/dashboard')->with('pesan','<div class="alert alert-warning">Anda tidak boleh mengakses halaman satuan</div>');
    }
    }

    public function tambahSatuan()
    {
        
        //return view('nama_folder/nama_file tanpa ekstensi');
        return view('satuan/tambah-satuan');
    }

    public function simpanSatuan()
    {
        $data=[
            //'nama_field'=>......('nama input')
			'nama_satuan'=>$this->request->getPost('id_satuan'),
		];

		$this->satuan->insertSatuan($data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/data-satuan');
    }

    public function editSatuan($id)
    {
        $data = [
            'listSatuan' => $this->satuan->find($id)
        ];
        return view('satuan/edit-satuan', $data);
    }

    public function prosesEdit($id)
    {
        $data=[
            //'nama_field'=>......('nama input')
			'nama_satuan'=>$this->request->getPost('nama_satuan'),
		];

		$this->satuan->update($id,$data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/data-satuan');
    }
    public function delete($id)
    {
        $syarat=[
            'id_satuan'=>$id
        ];
       
        $this->satuan->where($syarat)->delete();
        return redirect()->to('/data-satuan')->with('pesan','<div class="alert alert-success">data telah terhapus</div>');
    }
}
