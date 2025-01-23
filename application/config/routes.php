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
|	https://codeigniter.com/userguide3/general/routing.html
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

$config['base_url'] = 'http://localhost/Fp_pwl/index.php/';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Rute untuk CRUD Murid
$route['crud_murid'] = 'crud_murid/index';
$route['crud_murid/tambah'] = 'crud_murid/tambah';
$route['crud_murid/simpan'] = 'crud_murid/simpan';
$route['crud_murid/edit/(:num)'] = 'crud_murid/edit/$1';
$route['crud_murid/update'] = 'crud_murid/update';
$route['crud_murid/hapus/(:num)'] = 'crud_murid/hapus/$1';

// Rute untuk Kelas
$route['kelas'] = 'kelas/index'; // Menampilkan daftar kelas
$route['kelas/tambah_kelasdanjadwal'] = 'kelas/tambah'; // Menampilkan form tambah kelas
$route['kelas/edit_kelasdanjadwal/(:num)'] = 'kelas/edit/$1'; // Menampilkan form edit kelas
$route['kelas/hapus/(:num)'] = 'kelas/hapus/$1'; // Menghapus kelas
$route['edit_kelasdanjadwal/(:num)'] = 'edit_kelasdanjadwal/index/$1';


//route matapelajaran
$route['CRUD_matapelajaran'] = 'CRUD_matapelajaran/index';
$route['CRUD_matapelajaran/tambah'] = 'CRUD_matapelajaran/tambah';
$route['CRUD_matapelajaran/simpan'] = 'CRUD_matapelajaran/simpan';
$route['CRUD_matapelajaran/edit/(:num)'] = 'CRUD_matapelajaran/edit/$1';
$route['CRUD_matapelajaran/update'] = 'CRUD_matapelajaran/update';
$route['CRUD_matapelajaran/hapus/(:num)'] = 'CRUD_matapelajaran/hapus/$1';


// Routes  CRUD Ujian
$route['CRUD_ujian'] = 'CRUD_ujian/index';
$route['CRUD_ujian/tambah'] = 'CRUD_ujian/tambah';
$route['CRUD_ujian/simpan'] = 'CRUD_ujian/simpan';
$route['CRUD_ujian/edit/(:num)'] = 'CRUD_ujian/edit/$1';
$route['CRUD_ujian/update'] = 'CRUD_ujian/update';
$route['CRUD_ujian/hapus/(:num)'] = 'CRUD_ujian/hapus/$1';

$route['Admin_login'] = 'Admin_login/authenticate';
$route['Admin_login/authenticate'] = 'Admin_login/authenticate';
$route['admin/dashboard'] = 'dashboard/index';


//$route['login'] = 'login/authenticate';
//$route['login/authenticate'] = 'login/authenticate';
//$route['login/dashboard'] = 'dashboard/index';


$route['login'] = 'login/index';

// Proses autentikasi login untuk murid
$route['login/authenticate'] = 'login/authenticate';
// Halaman dashboard setelah login berhasil
$route['dashboard'] = 'dashboard/index';
// Logout
$route['logout'] = 'login/logout';  // Mengarah ke controller 'Login' dan method 'logout' untuk logout


$route['CRUD_nilai'] = 'CRUD_nilai/index';  // Menampilkan daftar nilai
$route['CRUD_nilai/tambah'] = 'CRUD_nilai/tambah';  // Menampilkan form tambah nilai
$route['CRUD_nilai/simpan'] = 'CRUD_nilai/simpan';  // Menyimpan nilai baru
$route['CRUD_nilai/edit/(:num)'] = 'CRUD_nilai/edit/$1';  // Menampilkan form edit nilai berdasarkan ID
$route['CRUD_nilai/update'] = 'CRUD_nilai/update';  // Mengupdate data nilai
$route['CRUD_nilai/hapus/(:num)'] = 'CRUD_nilai/hapus/$1';  // Menghapus nilai berdasarkan ID


$route['materi/(:num)'] = 'materi/index/$1';  // Routing untuk materi berdasarkan ID
