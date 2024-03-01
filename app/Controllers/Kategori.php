<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    public function tampilKategori()
    {
        if(session()->get('levelPengguna')=='admin'){
            $data = [
                'listkategori' => $this->kategori->getAllKategori() //getAllSatuan dapet dari MSatuan.php
            ];

            //return view('nama_folder/nama_file tanpa ekstensi');
            return view('Kategori/data-kategori', $data);
        } else {

            return redirect()->to('/dashboard')->with('pesan','<div class="alert alert-warning">Anda tidak boleh mengakses halaman kategori</div>');
        }
    }

    public function tambahKategori()
    {
        
        //return view('nama_folder/nama_file tanpa ekstensi');
        return view('Kategori/tambah-kategori');
    }

    public function simpanKategori()
    {
       // helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'nama_kategori' => 'required|is_unique[tbl_kategori.nama_kategori]', 
        ];
        $messages = [
            'nama_kategori' => [
                'required' => 'Nama kategori tidak boleh kosong!',
                'is_unique' => 'Nama kategori sudah ada!'
            ],  
        ];
       // set validasi
       $validation->setRules($rules, $messages);

       // cek validasi gagal
       if (!$validation->withRequest($this->request)->run()) {
       return redirect()->back()->withInput()->with('errors', $validation->getErrors());
       }


        $data=[
            //'nama_field'=>......('nama input')
			'nama_kategori'=>$this->request->getPost('nama_kategori'),
		];

        // var_dump($data);
		$this->kategori->insert($data);

        // // session()->setFlashdata('message','Data saved');
        // // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/data-kategori');
    }

    public function editKategori($id)
    {
        $data = [
            'listKategori' => $this->kategori->find($id)
        ];
        return view('kategori/edit-kategori', $data);
    }

    public function prosesEdit($id)
    {
        $data=[
            //'nama_field'=>......('nama input')
			'nama_kategori'=>$this->request->getPost('nama_kategori'),
		];

		$this->kategori->update($id,$data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/data-kategori');
    }
     
    public function delete($id)
    {
        $syarat=[
            'id_kategori'=>$id
        ];
       
        $this->kategori->where($syarat)->delete();
        return redirect()->to('/data-kategori')->with('pesan','<div class="alert alert-success">data telah terhapus</div>');
    }



}
