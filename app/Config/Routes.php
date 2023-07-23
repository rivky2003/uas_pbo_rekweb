<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');
$routes->get('/addmhs', 'Home::addmahasiswa');
$routes->post('/inputmhs', 'Home::savemahasiswa');
$routes->get('/edit/(:num)', 'Home::editmahasiswa/$1');
$routes->post('/update/(:num)', 'Home::updatemahasiswa/$1');
$routes->get('/delete/(:num)', 'Home::deletemahasiswa/$1');

$routes->get('/mata-kuliah', 'Home::matakuliah');
$routes->get('/addmatkul', 'Home::addmatakuliah');
$routes->post('/inputmatkul', 'Home::savematkul');
$routes->get('/editmatkul/(:num)', 'Home::editmatakuliah/$1');
$routes->post('/updatematkul/(:num)', 'Home::updatematakuliah/$1');
$routes->get('/deletematkul/(:num)', 'Home::deletematakuliah/$1');

$routes->get('/nilai', 'Home::nilai');
$routes->get('/addnilai', 'Home::addnilai');
$routes->post('/inputnilai', 'Home::savenilai');
$routes->get('/editnilai/(:num)', 'Home::editnilai/$1');
$routes->post('/updatenilai/(:num)', 'Home::updatenilai/$1');
$routes->get('/deletenilai/(:num)', 'Home::deletenilai/$1');


//praktisi
$routes->get('/profil', 'ProfileController::index');
// $routes->get('/product_id', 'ProfileController::getAllProduct');
$routes->get('/user', 'Home::user');
// routing khusus untuk angka
$routes->get('/user_param/(:num)', 'Home::userParam/$1/$2');
// apabila hanya membutuhkan 1 halaman saja
$routes->get('/user_func', function () {
    echo "ini dari Unu Jogja";
});
$routes->get('/hitung/(:any)', 'Home::hitung/$1');

$routes->get('/mata_kuliah', 'ProfileController::getAllMatkul');
$routes->get('/mahasiswa', 'ProfileController::getAllMahasiswa');
$routes->get('/nilaimhs', 'ProfileController::getAllNilai');

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
