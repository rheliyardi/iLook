<?php

namespace App\Models;

use CodeIgniter\Model;

class MProduk extends Model
{
    protected $table            = 'tbl_produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk','nama_produk','id_kategori','stok','id_satuan','harga_jual'];

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

    public function getAllProduk(){
        $produk= NEW Mproduk;
        $queryProduk=$produk->query("CALL lihat_produk2()")->getResult();
        return $queryProduk;
    }

    public function tampilProduk() {
        $produk = new MProduk;
        $queryProduk = $produk->query("CALL lihat_produk()")->getResultArray();
        return $queryProduk;
    }


public function getStok()
{
    $produk = new Mproduk();
    $produk -> select('tbl_produk.id_produk,tbl_produk.nama_produk,
    tbl_produk.harga_jual,
    tbl_produk.stok');
    $produk->orderBy('tbl_produk.stok', 'ASC');
    return $produk->findALL();
}
public function getLaporanproduk(){
    $produk = NEW Mproduk;
    
    $queryProduk=$produk->query("CALL lihat_laporan()")->getResult();
    return $queryProduk;
}

    // public function insertProduk($data) {
    //     $produk = new MProduk;
    //     $nama_produk       = $data['nama_produk'];
    //     $queryProduk = $produk->query("INSERT INTO `tbl_produk`(`nama_produk`) VALUES ('".$nama_produk."');")->getResult();
    //     return $queryProduk;
    // }
}
