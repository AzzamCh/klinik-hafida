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

// Rute untuk Login
$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// Rute Dashboard (Sementara)
// Rute Dashboard Admin
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/dokter', 'Dashboard::dokter');
$routes->get('/dashboard/dokter/create', 'Dashboard::dokter_create'); // Buka Form
$routes->post('/dashboard/dokter/store', 'Dashboard::dokter_store');  // Proses Simpan
// Rute CRUD Dokter Lengkap
$routes->get('/dashboard/dokter/edit/(:num)', 'Dashboard::dokter_edit/$1');    // Form Edit
$routes->post('/dashboard/dokter/update/(:num)', 'Dashboard::dokter_update/$1');// Proses Update
$routes->get('/dashboard/dokter/delete/(:num)', 'Dashboard::dokter_delete/$1'); // Proses Hapus
// Rute CRUD Poli
$routes->get('/dashboard/poli', 'Dashboard::poli');
$routes->get('/dashboard/poli/create', 'Dashboard::poli_create');
$routes->post('/dashboard/poli/store', 'Dashboard::poli_store');
$routes->get('/dashboard/poli/edit/(:num)', 'Dashboard::poli_edit/$1');
$routes->post('/dashboard/poli/update/(:num)', 'Dashboard::poli_update/$1');
$routes->get('/dashboard/poli/delete/(:num)', 'Dashboard::poli_delete/$1');
// Rute CRUD Artikel
$routes->get('/dashboard/artikel', 'Dashboard::artikel');
$routes->get('/dashboard/artikel/create', 'Dashboard::artikel_create');
$routes->post('/dashboard/artikel/store', 'Dashboard::artikel_store');
$routes->get('/dashboard/artikel/edit/(:num)', 'Dashboard::artikel_edit/$1');
$routes->post('/dashboard/artikel/update/(:num)', 'Dashboard::artikel_update/$1');
$routes->get('/dashboard/artikel/delete/(:num)', 'Dashboard::artikel_delete/$1');
// Rute Publik untuk Artikel
$routes->get('/artikel', 'Artikel::index'); // Halaman List (Opsional)
$routes->get('/artikel/(:segment)', 'Artikel::detail/$1'); // Halaman Baca Detail