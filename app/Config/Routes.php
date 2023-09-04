<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('create-db', function() {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('WeO')) 
    {
        echo 'Database created!';
    }
});

$routes->get('/', 'Home::index');
// $routes->addRedirect('/', 'home');

$routes->get('acara', 'Acara::index');
$routes->get('acara/add', 'Acara::create');
$routes->post('acara', 'Acara::store');
$routes->get('acara/edit/(:any)', 'Acara::edit/$1');
$routes->put('acara/(:any)', 'Acara::update/$1');
$routes->delete('acara/(:segment)', 'Acara::destroy/$1');

$routes->get('login', 'Auth::login');
// $routes->addRedirect('Auth/login', 'auth/login');