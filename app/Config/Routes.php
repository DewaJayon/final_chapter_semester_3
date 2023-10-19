<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/daftar_produk', 'Daftar_produk::index');
$routes->get('/tentang_kami', 'Tentang_kami::index');
$routes->get('/kontak_kami', 'Kontak_kami::index');

$routes->get('/login', 'Auth\Login::index');


$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/manajemen_produk', 'Admin\Manajemen_produk::index');
