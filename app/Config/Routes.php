<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pusher', 'Broadcast::index');
$routes->post('/pusher/kirim', 'Broadcast::kirim');
$routes->get('/pusher/notifikasi', 'Broadcast::notifikasi');
