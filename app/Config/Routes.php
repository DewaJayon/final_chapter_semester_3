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
$routes->get('/login', 'Auth\Login::index');

$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/manajemen_produk', 'Admin\Produk::index');

$routes->get('/admin/tambah_produk', 'Admin\Produk::tambah_produk');
$routes->post('/admin/tambah_produk', 'Admin\Produk::insert');

$routes->get('/admin/edit_produk/edit/(:any)', 'Admin\Produk::edit/$1');
$routes->post('/admin/edit_produk/edit/(:any)', 'Admin\Produk::update/$1');

$routes->get('/admin/manajemen_produk/delete/(:any)', 'Admin\Produk::delete/$1');
