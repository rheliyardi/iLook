<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get/post('/nama_routes', 'Controller::method');
//login

$routes->get('/', 'Home::index');
$routes->post('login-pengguna','Home::prosesLogin');
$routes->get('logout','Home::logout');

$routes->get('/dashboard', 'Admin::index');
$routes->get('/penjualan', 'Penjualan::index');

$routes->get('/data-satuan', 'Satuan::tampilSatuan');
$routes->get('/edit-satuan/(:num)', 'Satuan::editSatuan/$1');
$routes->post('/proses-edit-satuan/(:num)', 'Satuan::prosesEdit/$1');
$routes->get('/tambah-satuan', 'Satuan::tambahSatuan');
$routes->post('/simpan-satuan', 'Satuan::simpanSatuan');
$routes->get('/hapus-satuan/(:num)', 'Satuan::delete/$1');


$routes->get('/data-kategori', 'Kategori::tampilKategori');
$routes->get('/edit-kategori/(:num)', 'Kategori::editKategori/$1');
$routes->post('/proses-edit-kategori/(:num)', 'Kategori::prosesEdit/$1');
$routes->get('/tambah-kategori', 'Kategori::tambahKategori'); //mengambil tampilan
$routes->post('/simpan-kategori', 'Kategori::simpanKategori'); //mengirim data
$routes->get('/hapus-kategori/(:num)', 'Kategori::delete/$1');

$routes->get('/data-produk', 'Produk::tampilProduk');
$routes->get('/edit-produk/(:num)', 'Produk::editProduk/$1');
$routes->post('/proses-edit-produk/(:num)', 'Produk::prosesEdit/$1');
$routes->get('/hapus-produk/(:num)', 'Produk::delete/$1');
$routes->get('/tambah-produk', 'Produk::tambahProduk'); //mengambil tampilan
$routes->post('/simpan-produk', 'Produk::simpanProduk'); //mengirim data

$routes->get('/list-pengguna', 'Pengguna::tampilPengguna');
$routes->get('/tambah-pengguna', 'Pengguna::tambahPengguna');
$routes->post('/simpan-pengguna', 'Pengguna::simpanPengguna');
$routes->get('hapus-pengguna/(:num)', 'Pengguna::delete/$1');
$routes->post('/proses-edit-pengguna/(:num)', 'Pengguna::prosesEdit/$1');
$routes->get('/edit-pengguna/(:num)', 'Pengguna::editPengguna/$1');


$routes->get('/transaksi-penjualan','Penjualan::index');
$routes->post('/transaksi-penjualan','Penjualan::simpanPenjualan');
$routes->get('/pembayaran','Penjualan::simpanPembayaran');


$routes->get('/laporan','laporan::datalaporan');


$routes->get('/pdf', 'PdfController::index');
$routes->get('/pdf/generate', 'PdfController::generate');







// $routes->get('/halaman-admin', 'Admin::halamanAdmin');
