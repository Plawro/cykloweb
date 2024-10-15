<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('race/(:any)', 'Home::race/$1');
$routes->get('races', 'Home::races');
$routes->get('riders', 'Home::riders');
$routes->get('rider/(:any)', 'Home::rider/$1');
$routes->get('etapa/(:num)', 'Home::etapa/$1');
$routes->get('genpdf', 'Home::generatePDF');
$routes->get('randomRider', 'Home::randomRider');

$routes->get('add-sloupec/novy', 'VesmirController::addSloupec');
$routes->post('add-sloupec/novy/complete', 'VesmirController::addSloupecComplete');

$routes->get('edit-sloupec/edit/(:any)', 'VesmirController::editSloupec/$1');
$routes->put('edit-sloupec/edit/update', 'VesmirController::editSloupecComplete');

$routes->get('delete-sloupec/delete/(:any)', 'VesmirController::deleteSloupec/$1');
$routes->delete('delete-sloupec/delete/complete', 'VesmirController::deleteSloupecComplete');

$routes->get('login','Auth::login');
$routes->get('register','Auth::register');
$routes->get('logout','Auth::logoutComplete');
//$routes->post('save', 'Home::save');

$routes->post('loginComplete','Auth::loginComplete');
$routes->post('registerComplete','Auth::registerComplete');
//$routes->get('admin/dashboard','Home::index');
