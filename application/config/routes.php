<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['pengadaan/detail/(:any)'] = 'Pengadaan/Detail/$1';

$route['register'] = 'Auth/Register';
$route['register/proses'] = 'Auth/Register/proses';
$route['login'] = 'Auth/Login';
$route['login/proses'] = 'Auth/Login/proses';
$route['logout'] = 'Auth/Login/logout';

$route['(:any)/profil'] = 'Profil';

// Route Admin
$route['admin/dashboard'] = 'Admin/Dashboard';
$route['admin/data-barang'] = 'Admin/DataBarang';
$route['admin/barang-masuk'] = 'Admin/DataBarangMasuk';
$route['admin/barang-keluar'] = 'Admin/DataBarangKeluar';
$route['admin/data-user'] = 'Admin/DataUser';
$route['admin/data-asset'] = 'Admin/DataAsset';
$route['admin/peminjaman-asset'] = 'Admin/DataPeminjamanAsset';
$route['admin/data-supplier'] = 'Admin/DataSupplier';
$route['admin/daftar-pengadaan'] = 'Admin/DaftarPengadaan';
$route['admin/daftar-pengajuan'] = 'Admin/Pengajuan';
$route['admin/galeri'] = 'Admin/Galeri';
$route['admin/data-bidang'] = 'Admin/DataBidang';

// Route Sekretaris
$route['sekretaris/dashboard'] = 'Sekretaris/Dashboard';
$route['sekretaris/data-barang'] = 'Sekretaris/DataBarang';
$route['sekretaris/barang-masuk'] = 'Sekretaris/DataBarangMasuk';
$route['sekretaris/barang-keluar'] = 'Sekretaris/DataBarangKeluar';
$route['sekretaris/data-supplier'] = 'Sekretaris/DataSupplier';
$route['sekretaris/data-asset'] = 'Sekretaris/DataAsset';
$route['sekretaris/peminjaman-asset'] = 'Sekretaris/DataPeminjamanAsset';;
$route['sekretaris/galeri'] = 'Sekretaris/Galeri';


// Route Kadis
$route['kadis/dashboard'] = 'Kadis/Dashboard';

// Route Data Barang
$route['data-barang/insert'] = 'Admin/DataBarang/insert';
$route['data-barang/delete/(:any)'] = 'Admin/DataBarang/delete/$1';
$route['data-barang/update'] = 'Admin/DataBarang/update';

// Route Data Supplier
$route['data-supplier/insert'] = 'Admin/DataSupplier/insert';
$route['data-supplier/delete/(:any)'] = 'Admin/DataSupplier/delete/$1';
$route['data-supplier/update'] = 'Admin/DataSupplier/update';

// Route Data Galeri
$route['galeri/insert'] = 'Admin/Galeri/insert';
$route['galeri/delete/(:any)'] = 'Admin/Galeri/delete/$1';
$route['galeri/update'] = 'Admin/Galeri/update';

// Route Data Asset
$route['data-asset/insert'] = 'Admin/DataAsset/insert';
$route['data-asset/delete/(:any)'] = 'Admin/DataAsset/delete/$1';
$route['data-asset/update'] = 'Admin/DataAsset/update';

// Route Data Bidang
$route['data-bidang/insert'] = 'Admin/DataBidang/insert';
$route['data-bidang/delete/(:any)'] = 'Admin/DataBidang/delete/$1';
$route['data-bidang/update'] = 'Admin/DataBidang/update';

// Route Peminjaman Asset
$route['peminjaman-asset/insert'] = 'Admin/DataPeminjamanAsset/insert';
$route['peminjaman-asset/delete/(:any)'] = 'Admin/DataPeminjamanAsset/delete/$1';
$route['peminjaman-asset/update'] = 'Admin/DataPeminjamanAsset/update';
$route['peminjaman-asset/validation'] = 'Admin/DataPeminjamanAsset/validation';


// Route Data Barang Masuk
$route['barang-masuk/insert'] = 'Admin/DataBarangMasuk/insert';
$route['barang-masuk/delete/(:any)'] = 'Admin/DataBarangMasuk/delete/$1';
$route['barang-masuk/update'] = 'Admin/DataBarangMasuk/update';
$route['barang-masuk/validation'] = 'Kadis/ValidasiBarang/validation';
$route['barang-masuk/reject/(:any)'] = 'Kadis/ValidasiBarang/reject/$1';

// Route Data Barang Keluar
$route['barang-keluar/insert'] = 'Admin/DataBarangKeluar/insert';
$route['barang-keluar/delete/(:any)'] = 'Admin/DataBarangKeluar/delete/$1';
$route['barang-keluar/update'] = 'Admin/DataBarangKeluar/update';
$route['barang-keluar/validation'] = 'Admin/DataBarangKeluar/validation';

// Route Data Daftar Pengadaan
$route['daftar-pengadaan/insert'] = 'Admin/DaftarPengadaan/insert';
$route['daftar-pengadaan/delete/(:any)'] = 'Admin/DaftarPengadaan/delete/$1';
$route['daftar-pengadaan/update'] = 'Admin/DaftarPengadaan/update';

// Route Data Daftar Pengadaan
$route['daftar-pengajuan/insert'] = 'Admin/Pengajuan/insert';
$route['daftar-pengajuan/delete/(:any)'] = 'Admin/Pengajuan/delete/$1';
$route['daftar-pengajuan/update'] = 'Admin/Pengajuan/update';

// Route Data Daftar Pengajuan
$route['pengajuan/insert'] = 'Pengajuan/insert';
$route['pengajuan/delete/(:any)'] = 'Pengajuan/delete/$1';
$route['pengajuan/update'] = 'Pengajuan/update';

// Route Data User
$route['data-user/insert'] = 'Admin/DataUser/insert';
$route['data-user/delete/(:any)'] = 'Admin/DataUser/delete/$1';
$route['data-user/update'] = 'Admin/DataUser/update';

// Laporan Admin
$route['admin/laporan-data-barang'] = 'Admin/Laporan/databarang';
$route['admin/laporan-barang-masuk'] = 'Admin/Laporan/barangmasuk';
$route['admin/laporan-barang-keluar'] = 'Admin/Laporan/barangkeluar';
$route['admin/laporan-pengembalian-barang'] = 'Admin/Laporan/pengembalian';
$route['admin/laporan-data-asset'] = 'Admin/Laporan/dataasset';
$route['admin/laporan-data-peminjaman-asset'] = 'Admin/Laporan/datapeminjamanasset';
$route['admin/laporan-terima-data-peminjaman-asset'] = 'Admin/Laporan/terimadatapeminjamanasset';
$route['admin/laporan-data-user'] = 'Admin/Laporan/datauser';
$route['admin/laporan-data-supplier'] = 'Admin/Laporan/datasupplier';
$route['admin/laporan-user'] = 'Admin/Laporan/exportUser';
$route['admin/laporan-transaksi'] = 'Admin/Laporan/transaksi';
$route['admin/laporan-data-bidang'] = 'Admin/Laporan/databidang';
$route['admin/laporan-barang-pending'] = 'Admin/Laporan/barangpending';
$route['admin/export-barang-masuk'] = 'Admin/Laporan/exportBarangmasuk';
$route['admin/export-barang-keluar'] = 'Admin/Laporan/exportBarangkeluar';
$route['admin/export-pengembalian-barang'] = 'Admin/Laporan/exportPengembalianBarang';
$route['admin/export-data-barang'] = 'Admin/Laporan/exportDataBarang';
$route['admin/export-data-asset'] = 'Admin/Laporan/exportDataAsset';
$route['admin/export-data-peminjaman-asset'] = 'Admin/Laporan/exportDataPeminjamanAsset';
$route['admin/export-terima-data-peminjaman-asset'] = 'Admin/Laporan/exportDataPenerimaanAsset';
$route['admin/export-data-supplier'] = 'Admin/Laporan/exportDataSupplier';
$route['admin/export-data-bidang'] = 'Admin/Laporan/exportDataBidang';
$route['admin/export-barang-pending'] = 'Admin/Laporan/exportBarangpending';

// Laporan Sekretaris
$route['sekretaris/laporan-data-barang'] = 'Sekretaris/Laporan/databarang';
$route['sekretaris/laporan-data-barang'] = 'Sekretaris/Laporan/databarang';
$route['sekretaris/laporan-barang-masuk'] = 'Sekretaris/Laporan/barangmasuk';
$route['sekretaris/laporan-barang-keluar'] = 'Sekretaris/Laporan/barangkeluar';
$route['sekretaris/laporan-pengembalian-barang'] = 'Sekretaris/Laporan/pengembalian';
$route['sekretaris/laporan-data-asset'] = 'Sekretaris/Laporan/dataasset';
$route['sekretaris/laporan-data-peminjaman-asset'] = 'Sekretaris/Laporan/datapeminjamanasset';
$route['sekretaris/laporan-terima-data-peminjaman-asset'] = 'Sekretaris/Laporan/terimadatapeminjamanasset';
$route['sekretaris/laporan-data-user'] = 'Sekretaris/Laporan/datauser';
$route['sekretaris/laporan-data-supplier'] = 'Sekretaris/Laporan/datasupplier';
$route['sekretaris/laporan-user'] = 'Sekretaris/Laporan/exportUser';
$route['sekretaris/laporan-transaksi'] = 'Sekretaris/Laporan/transaksi';
$route['sekretaris/laporan-data-bidang'] = 'Sekretaris/Laporan/databidang';
$route['sekretaris/laporan-barang-pending'] = 'Sekretaris/Laporan/barangpending';
$route['sekretaris/export-barang-masuk'] = 'Sekretaris/Laporan/exportBarangmasuk';
$route['sekretaris/export-barang-keluar'] = 'Sekretaris/Laporan/exportBarangkeluar';
$route['sekretaris/export-pengembalian-barang'] = 'Sekretaris/Laporan/exportPengembalianBarang';
$route['sekretaris/export-data-barang'] = 'Sekretaris/Laporan/exportDataBarang';
$route['sekretaris/export-data-asset'] = 'Sekretaris/Laporan/exportDataAsset';
$route['sekretaris/export-data-peminjaman-asset'] = 'Sekretaris/Laporan/exportDataPeminjamanAsset';
$route['sekretaris/export-data-supplier'] = 'Sekretaris/Laporan/exportDataSupplier';
$route['sekretaris/export-data-bidang'] = 'Sekretaris/Laporan/exportDataBidang';
$route['sekretaris/export-barang-pending'] = 'Sekretaris/Laporan/exportBarangpending';

// Laporan Kadis
$route['kadis/laporan-data-barang'] = 'Kadis/Laporan/databarang';
$route['kadis/laporan-data-asset'] = 'Kadis/Laporan/dataasset';
$route['kadis/laporan-barang-masuk'] = 'Kadis/Laporan/barangmasuk';
$route['kadis/laporan-barang-keluar'] = 'Kadis/Laporan/barangkeluar';
$route['kadis/laporan-data-user'] = 'Kadis/Laporan/datauser';
$route['kadis/laporan-user'] = 'Kadis/Laporan/exportUser';
$route['kadis/laporan-transaksi'] = 'Kadis/Laporan/transaksi';
$route['kadis/laporan-barang-pending'] = 'Kadis/Laporan/barangpending';
$route['kadis/export-barang-masuk'] = 'Kadis/Laporan/exportBarangmasuk';
$route['kadis/export-barang-pending'] = 'Kadis/Laporan/exportBarangpending';
$route['kadis/export-barang-keluar'] = 'Kadis/Laporan/exportBarangkeluar';
$route['kadis/export-data-barang'] = 'Kadis/Laporan/exportDataBarang';
$route['kadis/export-data-asset'] = 'Kadis/Laporan/exportDataAsset';

// Validasi Barang Kadis
$route['kadis/validasi-barang-masuk'] = 'Kadis/ValidasiBarang';