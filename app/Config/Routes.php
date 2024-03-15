<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Home::login');

$routes->get('dashboard', 'Panel\Dashboard::index', ['as' => 'dashboard']);

$routes->get('search', 'Home::search');

$routes->get('insertGift', 'Home::insertGift');



// $routes->get('administracio_acceso', 'Acceso::index', ['as' =>])
