<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 1. Rute Halaman Depan (Pengunjung)
$routes->get('/', 'Home::index');

// 2. Rute Detail Layanan
$routes->get('layanan/detail/(:segment)', 'Layanan::detail/$1');

// 3. Rute Login & Logout
$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// 4. Rute Publik Artikel (Baca Berita)
$routes->get('/artikel', 'Artikel::index'); 
$routes->get('/artikel/(:segment)', 'Artikel::detail/$1');

// =================================================================
// 5. RUTE DASHBOARD ADMIN (Semua berawalan /dashboard)
// =================================================================

// Halaman Utama Dashboard
$routes->get('/dashboard', 'Dashboard::index');

// --- KELOLA DOKTER ---
$routes->get('/dashboard/dokter', 'Dashboard::dokter');
$routes->get('/dashboard/dokter/create', 'Dashboard::dokter_create');
$routes->post('/dashboard/dokter/store', 'Dashboard::dokter_store');
$routes->get('/dashboard/dokter/edit/(:num)', 'Dashboard::dokter_edit/$1');
$routes->post('/dashboard/dokter/update/(:num)', 'Dashboard::dokter_update/$1');
$routes->get('/dashboard/dokter/delete/(:num)', 'Dashboard::dokter_delete/$1');

// --- KELOLA POLI ---
$routes->get('/dashboard/poli', 'Dashboard::poli');
$routes->get('/dashboard/poli/create', 'Dashboard::poli_create');
$routes->post('/dashboard/poli/store', 'Dashboard::poli_store');
$routes->get('/dashboard/poli/edit/(:num)', 'Dashboard::poli_edit/$1');
$routes->post('/dashboard/poli/update/(:num)', 'Dashboard::poli_update/$1');
$routes->get('/dashboard/poli/delete/(:num)', 'Dashboard::poli_delete/$1');

// --- KELOLA ARTIKEL ---
$routes->get('/dashboard/artikel', 'Dashboard::artikel');
$routes->get('/dashboard/artikel/create', 'Dashboard::artikel_create');
$routes->post('/dashboard/artikel/store', 'Dashboard::artikel_store');
$routes->get('/dashboard/artikel/edit/(:num)', 'Dashboard::artikel_edit/$1');
$routes->post('/dashboard/artikel/update/(:num)', 'Dashboard::artikel_update/$1');
$routes->get('/dashboard/artikel/delete/(:num)', 'Dashboard::artikel_delete/$1');

// --- KELOLA SLIDER (CAROUSEL) ---
$routes->get('/dashboard/slider', 'Dashboard::slider');
$routes->get('/dashboard/slider_create', 'Dashboard::slider_create'); // Ganti / jadi _
$routes->post('/dashboard/slider_store', 'Dashboard::slider_store');  // Ganti / jadi _
$routes->get('/dashboard/slider_edit/(:num)', 'Dashboard::slider_edit/$1'); // Ganti / jadi _
$routes->post('/dashboard/slider_update/(:num)', 'Dashboard::slider_update/$1'); // Ganti / jadi _
$routes->get('/dashboard/slider_delete/(:num)', 'Dashboard::slider_delete/$1'); // Ganti / jadi _
// Kelola User (Admin)
$routes->get('/dashboard/user', 'User::index');
$routes->get('/dashboard/user/create', 'User::create');
$routes->post('/dashboard/user/save', 'User::save');
$routes->get('/dashboard/user/edit/(:num)', 'User::edit/$1');
$routes->post('/dashboard/user/update/(:num)', 'User::update/$1');
$routes->get('/dashboard/user/delete/(:num)', 'User::delete/$1');

// Rute untuk Chatbot
$routes->post('chatbot/reply', 'Chatbot::reply');