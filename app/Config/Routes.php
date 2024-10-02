<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('race/(:num)', 'Home::race/$1');
$routes->get('etapa/(:num)', 'Main::etapa/$1');