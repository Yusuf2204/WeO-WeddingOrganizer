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
// $routes->ADDRedirect('/', 'home');

$routes->get('acara', 'Acara::index');
$routes->get('acara/add', 'Acara::create');
$routes->post('acara', 'Acara::store');