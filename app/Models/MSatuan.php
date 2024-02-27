<?php

namespace App\Models;

use CodeIgniter\Model;

class MSatuan extends Model
{
    protected $table            = 'tbl_satuan';
    protected $primaryKey       = 'id_satuan';
    protected $useAutoIncrement = true; //false
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_satuan','nama_satuan'];

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

    public function getAllSatuan() {
        $satuan = new MSatuan;
        $querySatuan = $satuan->query("SELECT * FROM `tbl_satuan`")->getResult();
        return $querySatuan;
    }
    public function insertSatuan($data) {
        $satuan = new MSatuan;
        $nama_satuan       = $data['nama_satuan'];
        $querySatuan = $satuan->query("INSERT INTO `tbl_satuan`(`nama_satuan`) VALUES ('".$nama_satuan."');");
        return $querySatuan;
    }
}
