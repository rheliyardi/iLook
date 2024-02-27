<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'akses' => session()->get('level')
        ];
        return view('Admin/halaman-admin',$data);
    }
}
