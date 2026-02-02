<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rute untuk Halaman Depan
$routes->get('/', 'Home::index');

// --- TAMBAHAN BARU UNTUK LAYANAN ---
// Artinya: Kalau URL-nya "layanan/detail/poli-umum", 
// arahkan ke Controller "Layanan", fungsi "detail", dan kirim "poli-umum" sebagai parameter ($1).
$routes->get('layanan/detail/(:segment)', 'Layanan::detail/$1');