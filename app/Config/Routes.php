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
$routes->get('Routine', 'Routine::index') ;
$routes->get('Madeorder', 'Madeorder::index') ;
$routes->get('Materials', 'Materials::index') ;
$routes->get('TransferDoc' , 'TransferDoc::index') ;

$routes->get('BasicInfo' , 'BasicInfo::index') ;
$routes->get('CustomerInfo' ,'CustomerInfo::index') ;
$routes->get('CustomerInfo/add' , 'CustomerInfo::add') ;
$routes->post('CustomerInfo/add' ,'CustomerInfo::runAdd') ;
$routes->get('CustomerInfo/edit' ,'CustomerInfo::edit') ;
$routes->post('CustomerInfo/edit' ,'CustomerInfo::runEdit') ;
$routes->post('CustomerInfo/delete' ,'CustomerInfo::delete') ;

$routes->get('ProductInfo' , 'ProductInfo::index') ;
$routes->get('ProductInfo/add' , 'ProductInfo::add') ;
$routes->post('ProductInfo/add' , 'ProductInfo::runAdd') ;
$routes->get('ProductInfo/edit' , 'ProductInfo::edit') ;
$routes->post('ProductInfo/edit' , 'ProductInfo::runEdit') ;
$routes->post('ProductInfo/delete' ,'ProductInfo::delete') ;

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
