<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

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


//$routes->add('(:any)','Home::NextPages') ;
//$routes->add('(:any)', 'Pages::View');


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('Routine', 'Pages::Routine') ;
$routes->post('Madeorder','Pages::Madeorder') ;
$routes->post('Materials' ,'Pages::Materials') ;
$routes->post('TransferDocument' , 'Pages::TransferDocument') ;

$routes->get('BasicInfo' , 'PageBasic::BasicInfo') ;


$routes->post('CustomerInfo' , 'PageCustomer::CustomerInfo') ;
$routes->post('NewCustomer' , 'PageCustomer::NewCustomer') ;
//$routes->post('NextPages','Home::NextPages/nextpage') ;


$routes->get('demo' , 'Demo::index');
$routes->get('demo/add' , 'Demo::add');
$routes->post('demo/add' , 'Demo::runAdd');
$routes->get('demo/edit' , 'Demo::edit');
$routes->post('demo/edit' , 'Demo::runEdit');
$routes->post('demo/delete' , 'Demo::delete');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
