<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('race/(:any)', 'Home::race/$1');
$routes->get('races', 'Home::races');
$routes->get('rider/(:any)', 'Home::rider/$1');
$routes->get('etapa/(:num)', 'Home::etapa/$1');
$routes->get('genpdf', 'Home::generatePDF');

$routes->get('add-sloupec/novy', 'VesmirController::addSloupec');
$routes->post('add-sloupec/novy/complete', 'VesmirController::addSloupecComplete');
