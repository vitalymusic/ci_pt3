<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Front::index');
$routes->get('/users', 'Front::users');
$routes->get('/all_users', 'Front::all_users');

$routes->get('/page/(:any)', 'Front::page/$1');
$routes->get('/page', 'Front::page');

