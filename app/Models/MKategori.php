<?php

namespace App\Models;

use CodeIgniter\Model;

class MKategori extends Model
{
    protected $table            = 'tbl_kategori';
    protected $primaryKey       = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kategori','nama_kategori'];

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

    public function getAllKategori() {
        $kategori = new MKategori;
        $queryKategori = $kategori->query("SELECT * FROM `tbl_kategori`")->getResult();
        return $queryKategori;
    }

    public function insertKategori($data) {
        $kategori = new MKategori;
        $nama_kategori       = $data['nama_kategori'];
        $queryKategori = $kategori->query("INSERT INTO `tbl_kategori`(`nama_kategori`) VALUES ('".$nama_kategori."');")->getResult();
        return $queryKategori;
    }
}
