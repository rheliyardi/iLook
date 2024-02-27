<?php

namespace App\Models;

use CodeIgniter\Model;

class MPengguna extends Model
{
    protected $table            = 'tbl_pengguna';
    protected $primaryKey       = 'id_pengguna';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pengguna','nama_pengguna','password','username','level'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllPengguna() {
        $pengguna = new MPengguna;
        $queryPengguna = $pengguna->query("SELECT * FROM `tbl_pengguna`")->getResult();
        return $queryPengguna;
    }

    public function insertPengguna($data) {
        $satuan = new MPengguna;
        $nama_pengguna = $data['nama_pengguna'];
        $password = $data['password'];
        $username = $data['useename'];
        $level = $data['level'];
        $queryPengguna = $pengguna->query("INSERT INTO `tbl_pengguna`('nama_pengguna, password, username, level') VALUES ('".$nama_pengguna.", ".$password.", ".$password.", ".$username.", ".$level."');");
        return $queryPengguna;
    }
}
