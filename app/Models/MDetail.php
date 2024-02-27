<?php

namespace App\Models;

use CodeIgniter\Model;

class MDetail extends Model
{
    protected $table            = 'tbl_detail_penjualan';
    protected $primaryKey       = 'id_detail';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_detail','id_produk','id_penjualan','total_harga','qty'];

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

    public function getDetailPenjualan($idPenjualan)
    {
    return $this->db->table('tbl_detail_penjualan')
    ->select('tbl_detail_penjualan.*, tbl_penjualan.no_transaksi,tbl_produk.nama_produk')
    ->join('tbl_penjualan', 'tbl_penjualan.id_penjualan = tbl_detail_penjualan.id_penjualan')
    ->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_penjualan.id_produk')
    ->where('tbl_detail_penjualan.id_penjualan', $idPenjualan)
    ->get()
    ->getResultArray();
    }
    

}
