<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('halaman-login');
    }

    public function prosesLogin()
    {
        //1. menampung username dan password
        $usernya     =  $this->request->getPost('username');   
        $passwordnya =  $this->request->getPost('password');

        // array untuk menentukan syarat siapa yang login
        $syarat=[
            'nama_pengguna'=>$usernya,
            'password'=>$passwordnya
        ];

        // mencari user berdasarkan syarat diatas
        $queryUser = $this->pengguna->where($syarat)->find();  

        //SQL = select * from tbluser where usename = ? and password = ?

        // membuktikan apakah user ada atau tida
        //var_dump($queryUser);

        if(count($queryUser)==1){
            // membuat session
            $dataSession=[
                'idPengguna' =>$queryUser[0]['id_pengguna'],
                'namaPengguna' =>$queryUser[0]['nama_pengguna'],
                'levelPengguna' =>$queryUser[0]['level'] ,
                'sudahkahLogin'=>true
            ];
            session()->set($dataSession);
            
//            var_dump($queryUser);
            // jika sukses login arahkan ke dashboar
            return redirect()->to(site_url('/dashboard'));
        } else {
            //mengembalikan ke halamana login
            return redirect()->to(site_url('/'))->with('info','<div style="color:red;font-size:10px">Gagal Login</div>');
        }

    }

    public function logout(){
        // 1. menghapus session
        session()->destroy();
        // 2. mengarahkan ke halaman login
        return redirect()->to(site_url('/'));
    }


}