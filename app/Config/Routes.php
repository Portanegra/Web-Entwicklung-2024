<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/spalten', 'Columns::index');
$routes->get('/spalten/formular', 'Columns::form');
