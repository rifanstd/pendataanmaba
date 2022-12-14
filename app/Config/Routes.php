<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Page::index', ['filter' => 'role:superadmin, admin, mahasiswa']);

// Untuk mahasiswa
$routes->get('/mahasiswa/informasi_data_anda', 'Mahasiswa::informasi_data_anda', ['filter' => 'role:mahasiswa']);
$routes->get('/mahasiswa/edit_biodata/(:num)', 'Mahasiswa::edit_biodata/$1', ['filter' => 'role:mahasiswa']);
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1', ['filter' => 'role:mahasiswa']);
$routes->get('/mahasiswa/daftar_mahasiswa', 'Mahasiswa::daftar_mahasiswa', ['filter' => 'role:mahasiswa']);

// Untuk Admin
$routes->get('/data_mahasiswa', 'Mahasiswa::index', ['filter' => 'role:admin']);
$routes->get('/validasi/(:num)', 'Mahasiswa::validasi/$1', ['filter' => 'role:admin']);
$routes->post('/validasi/save_validasi/(:num)', 'Mahasiswa::save_validasi/$1', ['filter' => 'role:admin']);

$routes->get('/fakultas/index', 'Fakultas::index', ['filter' => 'role:admin']);
$routes->get('/fakultas/create', 'Fakultas::create', ['filter' => 'role:admin']);
$routes->post('/fakultas/save', 'Fakultas::save', ['filter' => 'role:admin']);
$routes->get('/fakultas/edit/(:num)', 'Fakultas::edit/$1', ['filter' => 'role:admin']);
$routes->post('/fakultas/update/(:num)', 'Fakultas::update/$1', ['filter' => 'role:admin']);
$routes->delete('/fakultas/delete/(:num)', 'Fakultas::delete/$1', ['filter' => 'role:admin']);

$routes->get('/jurusan/index', 'Jurusan::index', ['filter' => 'role:admin']);
$routes->get('/jurusan/create', 'Jurusan::create', ['filter' => 'role:admin']);
$routes->post('/jurusan/save', 'Jurusan::save', ['filter' => 'role:admin']);
$routes->get('/jurusan/edit/(:num)/(:num)', 'Jurusan::edit/$1/$2', ['filter' => 'role:admin']);
$routes->post('/jurusan/update/(:num)', 'Jurusan::update/$1', ['filter' => 'role:admin']);
$routes->delete('/jurusan/delete/(:num)', 'Jurusan::delete/$1', ['filter' => 'role:admin']);

$routes->get('/prodi/index', 'Prodi::index', ['filter' => 'role:admin']);
$routes->get('/prodi/create', 'Prodi::create', ['filter' => 'role:admin']);
$routes->post('/prodi/save', 'Prodi::save', ['filter' => 'role:admin']);
$routes->get('/prodi/edit/(:num)/(:num)/(:num)', 'Prodi::edit/$1/$2/$3', ['filter' => 'role:admin']);
$routes->post('/prodi/update/(:num)', 'Prodi::update/$1', ['filter' => 'role:admin']);
$routes->delete('/prodi/delete/(:num)', 'Prodi::delete/$1', ['filter' => 'role:admin']);

// Untuk superadmin
$routes->get('/admin/data_admin', 'Admin::index', ['filter' => 'role:superadmin']);
$routes->delete('/admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'role:superadmin']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
