<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produk extends BaseController
{
    public function tampilProduk()
    {
        if(session()->get('levelPengguna')=='admin'){

        $data = [
        'listProduk' => $this->produk->tampilProduk(), 
         ];

        //return view('nama_folder/nama_file tanpa ekstensi');
        return view('produk/data-produk', $data);
    } else {

        return redirect()->to('/dashboard')->with('pesan','<div class="alert alert-warning">Anda tidak boleh mengakses halaman produk</div>');
    }


    }

    public function tambahProduk()
    {
        
        //return view('nama_folder/nama_file tanpa ekstensi');
        $data = [
            'list'=> $this->produk->tampilProduk(),
            'produk' => $this->produk->findAll(),
            'listKategori' => $this->kategori->findAll(),
            'listSatuan' => $this->satuan->findAll()
        ];
        return view('produk/tambah-produk', $data);
    }

    public function simpanProduk()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'nama_produk' => 'required|is_unique[tbl_produk.nama_produk]',
            'kategori' => 'required',
            'stok' => 'required|greater_than[0]',
            'satuan' => 'required',
            'harga_jual' => 'required|checkHargaValid[harga_jual]', 
        ];
        $messages = [
            'nama_produk' => [
                'required' => 'Nama produk tidak boleh kosong!',
                'is_unique' => 'Nama produk sudah ada!'
            ],
            'kategori' => [
                'required' => 'kategori tidak boleh kosong!',
            ],
            'stok' => [
                'required' => 'Stok tidak boleh kosong!',
                'greater_than' => 'Stok harus lebih besar dari 0!'
            ], 
            'satuan' => [
                'required' => 'Satuan tidak boleh kosong!',
            ],
            'harga_jual' => [
                'required' => 'Harga jual tidak boleh kosong!',
                'checkHargaValid' => 'Harga jual tidak boleh lebih kecil dari harga beli!'
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
			'nama_produk'=>$this->request->getPost('nama_produk'),
			'id_kategori'=>$this->request->getPost('kategori'),
			'stok'=>$this->request->getPost('stok'),
			'id_satuan'=>$this->request->getPost('satuan'),
			'harga_jual'=>$this->request->getPost('harga_jual'),
		];

		$this->produk->save($data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/data-produk');
    }

    public function editProduk($id)
    {
        $syarat = [
            'id_produk' => $id
        ];
        $data = [
            'listProduk' => $this->produk->find($id),
            'listKategori' => $this->kategori->findAll(),
            'listSatuan' => $this->satuan->findAll()
        ];
        return view('produk/edit-produk', $data);
    }

    public function prosesEdit($id)
    {
        $data=[
            //'nama_field'=>......('nama input')
			'nama_produk'=>$this->request->getPost('nama_produk'),
            'id_kategori'=>$this->request->getPost('nama_kategori'),
            'stok'=>$this->request->getPost('stok'),
            'id_satuan'=>$this->request->getPost('nama_satuan'),
            'harga_jual'=>$this->request->getPost('harga_jual'),
		];

		$this->produk->update($id,$data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/data-produk');
    }

    public function delete($id)
    {
        $syarat=[
            'id_produk'=>$id
        ];
       
        $this->produk->where($syarat)->delete();
        return redirect()->to('/data-produk')->with('pesan','<div class="alert alert-success">data telah terhapus</div>');
    }

}
