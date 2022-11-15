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

/* Admin */
$routes->get('adminDashboard', 'AdminPages::dashboard');
$routes->get('AdminEmployee', 'AdminPages::employee');
$routes->get('AdminEditEmployee', 'AdminPages::editEmployee');
$routes->get('AdminPayroll', 'AdminPages::payroll');
$routes->get('AdminEditPayroll', 'AdminPages::editPayroll');
$routes->post('updateProfile', 'AdminPages::updateProfile');
$routes->get('AdminPresensi', 'AdminPages::presensi');
$routes->get('Presensi', 'Pages::presensi');
$routes->get('/', 'Pages::dashboard');
$routes->get('pegawaiDashboard', 'Pages::dashboard');
$routes->get('profile', 'Pages::profile');
$routes->get('payroll', 'Pages::payroll');
$routes->get('presensi', 'Pages::presensi');
$routes->get('login', 'Login::index');
$routes->post('login/process', 'Login::process');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/logout', 'Login::logout');
$routes->post('/updateProfile', 'Pages::updateProfile');
$routes->post('/paymentMethod', 'Pages::paymentMethod');


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