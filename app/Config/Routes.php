<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Front::index');
$routes->get('/users', 'Front::users');


$routes->get('/page/(:any)', 'Front::page/$1');
$routes->get('/page', 'Front::page');

// API
$routes->get('/all_users', 'Front::all_users');
$routes->get('/api/getNav', 'Front::getNav');



// email sender

$routes->get('/email', 'EmailSender::index');
$routes->post('/email/send', 'EmailSender::sendEmail');



// adminnistration

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/pasutijumi', 'Admin::pasutijumi');

