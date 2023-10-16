<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/daftar_produk', 'Home::daftar_produk');
$routes->get('/tentang_kami', 'Home::tentang_kami');
$routes->get('/kontak_kami', 'Home::kontak_kami');
$routes->get('/tantang_kami', 'Home::tentang_kami');
