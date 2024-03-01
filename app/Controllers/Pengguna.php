<?php

namespace App\Controllers;

use App\Models\Modelpengguna;

class Pengguna extends BaseController
{
    public function tampilPengguna()
    {
        if(session()->get('levelPengguna')=='admin'){
        $data = [
            'listPengguna' => $this->pengguna->getAllPengguna() //getAllSatuan dapet dari MSatuan.php
         ];

        //return view('nama_folder/nama_file tanpa ekstensi');
        return view('Pengguna/data-pengguna', $data);
    } else {

        return redirect()->to('/dashboard')->with('pesan','<div class="alert alert-warning">Anda tidak boleh mengakses halaman pengguna</div>');
    }
    }

    public function tambahPengguna()
    {
        //return view('nama_folder/nama_file tanpa ekstensi');
        return view('pengguna/tambah-pengguna');
    }
    public function simpanPengguna()
    {
       // helper(['form']);
       $validation = \Config\Services::validation();

       $rules = [
           'namaPengguna' => 'required|is_unique[tbl_pengguna.nama_pengguna]', 
           'password' => 'required',
            'username' => 'required|is_unique[tbl_pengguna.username]',
            'level' => 'required',
       ];
       $messages = [
        'namaPengguna' => [
            'required' => 'Nama pengguna tidak boleh kosong!',
            'is_unique' => 'Nama pengguna sudah ada!'
        ],
        'password' => [
            'required' => 'password tidak boleh kosong!',
        ],
        'username' => [
            'required' => 'username tidak boleh kosong!',
            'is_unique' => 'Nama pengguna sudah ada!'
        ], 
        'level' => [
            'required' => 'level tidak boleh kosong!',
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
			'nama_pengguna'=>$this->request->getPost('namaPengguna'),
			'password'=>$this->request->getPost('password'),
			'username'=>$this->request->getPost('username'),
			'level'=>$this->request->getPost('level'),
		];

		$this->pengguna->save($data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/list-pengguna');
    }
    public function editPengguna($id)
    {
        $data = [
            'listPengguna' => $this->pengguna->find($id)
        ];
        return view('pengguna/edit-pengguna', $data);
    }

    public function prosesEdit($id)
    {
        $data=[
            //'nama_field'=>......('nama input')
			'nama_pengguna'=>$this->request->getPost('nama_pengguna'),
		];

		$this->pengguna->update($id,$data);

        // session()->setFlashdata('message','Data saved');
        // session()->setFlashdata('failmessage','Data fail to be saved.');
		return redirect()->to('/list-pengguna');
    }

        public function delete($id)
        {
            $syarat=[
                'id_pengguna'=>$id
            ];
           
            $this->pengguna->where($syarat)->delete();
            return redirect()->to('/list-pengguna')->with('pesan','<div class="alert alert-success">data telah terhapus</div>');
        }
}