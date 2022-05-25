<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
$routes->post('/auth/save', 'Auth::save', ['filter' => 'login']);
$routes->get('/auth/order', 'Auth::order');
$routes->get('/dashboard/editdata/(:num)', 'Dashboard::editdata/$1', ['filter' => 'role:admin']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'role:admin,user']);
$routes->get('/dashboard/index', 'Dashboard::index', ['filter' => 'role:admin,user']);
$routes->get('/dashboard/informasi/index', 'Dashboard::informasi', ['filter' => 'role:admin']);
$routes->get('/dashboard/informasi', 'Dashboard::informasi', ['filter' => 'role:admin']);
$routes->get('/dashboard/edit', 'Dashboard::edit', ['filter' => 'role:admin']);
$routes->get('/dashboard/edit/(:num)', 'Dashboard::edit/$1', ['filter' => 'role:admin']);
$routes->get('/dashboard/editdata/(:num)', 'Dashboard::editdata/$1', ['filter' => 'role:admin']);
$routes->delete('/auth/(:num)', 'Auth::delete/$1', ['filter' => 'role:admin']);
$routes->get('/auth/(:any)', 'Auth::index/$1');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}