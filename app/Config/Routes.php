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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/direktur', 'Direktur\UserController::index');
$routes->get('/direktur/dashboard', 'Direktur\DashboardController::index');
$routes->get('/direktur/users', 'Direktur\UserController::index');
$routes->add('/direktur/users/create', 'Direktur\UserController::create');
$routes->add('/direktur/users/detail/(:any)', 'Direktur\UserController::detail/$1');
$routes->add('/direktur/users/edit/(:any)', 'Direktur\UserController::edit/$1');
$routes->add('/direktur/users/delete/(:any)', 'Direktur\UserController::delete/$1');
$routes->get('/direktur/karyawan', 'Direktur\KaryawanController::index');
$routes->add('/direktur/karyawan/detail/(:any)', 'Direktur\KaryawanController::detail/$1');
$routes->get('/direktur/penilaian', 'Direktur\PenilaianController::index');

$routes->get('/manager', 'Manager\DashboardController::index');
$routes->get('/manager/dashboard', 'Manager\DashboardController::index');
$routes->get('/manager/kriteria', 'Manager\KriteriaController::index');
$routes->add('/manager/kriteria/detail/(:any)', 'Manager\KriteriaController::detail/$1');
$routes->add('/manager/kriteria/edit/(:any)', 'Manager\KriteriaController::edit/$1');
$routes->get('/manager/karyawan', 'Manager\KaryawanController::index');
$routes->add('/manager/karyawan/create', 'Manager\KaryawanController::create');
$routes->add('/manager/karyawan/detail/(:any)', 'Manager\KaryawanController::detail/$1');
$routes->add('/manager/karyawan/edit/(:any)', 'Manager\KaryawanController::edit/$1');
$routes->add('/manager/karyawan/delete/(:any)', 'Manager\KaryawanController::delete/$1');
$routes->get('/manager/penilaian', 'Manager\PenilaianController::index');
$routes->add('/manager/penilaian/(:any)/(:any)', 'Manager\PenilaianController::tambah/$1/$2');
$routes->add('/manager/detail/(:any)', 'Manager\PenilaianController::detail/$1');
$routes->add('/manager/tambahpenilaian', 'Manager\PenilaianController::tambahPenilaian');


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
