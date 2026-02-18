<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =================================================================
// 1. RUTE PUBLIK (Pengunjung Website)
// =================================================================
$routes->get('/', 'Home::index');
$routes->get('layanan/detail/(:segment)', 'Layanan::detail/$1');

// Rute Artikel (Publik)
$routes->get('/artikel', 'Artikel::index'); 
$routes->get('/artikel/(:segment)', 'Artikel::detail/$1');

// Rute Chatbot
$routes->post('chatbot/reply', 'Chatbot::reply');

// =================================================================
// 2. RUTE OTENTIKASI (Login / Logout)
// =================================================================
$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// =================================================================
// 3. RUTE DASHBOARD ADMIN (Aman Terlindungi AuthFilter)
// =================================================================
// Menggunakan Route Group untuk merapikan dan mengamankan sekaligus
$routes->group('dashboard', ['filter' => 'auth'], function($routes) {
    
    // Halaman Utama Dashboard
    $routes->get('/', 'Dashboard::index');

    // --- KELOLA DOKTER ---
    $routes->get('dokter', 'Dashboard::dokter');
    $routes->get('dokter/create', 'Dashboard::dokter_create');
    $routes->post('dokter/store', 'Dashboard::dokter_store');
    $routes->get('dokter/edit/(:num)', 'Dashboard::dokter_edit/$1');
    $routes->post('dokter/update/(:num)', 'Dashboard::dokter_update/$1');
    $routes->get('dokter/delete/(:num)', 'Dashboard::dokter_delete/$1');

    // --- KELOLA POLI ---
    $routes->get('poli', 'Dashboard::poli');
    $routes->get('poli/create', 'Dashboard::poli_create');
    $routes->post('poli/store', 'Dashboard::poli_store');
    $routes->get('poli/edit/(:num)', 'Dashboard::poli_edit/$1');
    $routes->post('poli/update/(:num)', 'Dashboard::poli_update/$1');
    $routes->get('poli/delete/(:num)', 'Dashboard::poli_delete/$1');

    // --- KELOLA ARTIKEL ---
    $routes->get('artikel', 'Dashboard::artikel');
    $routes->get('artikel/create', 'Dashboard::artikel_create');
    $routes->post('artikel/store', 'Dashboard::artikel_store');
    $routes->get('artikel/edit/(:num)', 'Dashboard::artikel_edit/$1');
    $routes->post('artikel/update/(:num)', 'Dashboard::artikel_update/$1');
    $routes->get('artikel/delete/(:num)', 'Dashboard::artikel_delete/$1');

    // --- KELOLA SLIDER (CAROUSEL) ---
    $routes->get('slider', 'Dashboard::slider');
    $routes->get('slider_create', 'Dashboard::slider_create');
    $routes->post('slider_store', 'Dashboard::slider_store');
    $routes->get('slider_edit/(:num)', 'Dashboard::slider_edit/$1');
    $routes->post('slider_update/(:num)', 'Dashboard::slider_update/$1');
    $routes->get('slider_delete/(:num)', 'Dashboard::slider_delete/$1');

    // --- KELOLA USER (ADMIN) ---
    $routes->get('user', 'User::index');
    $routes->get('user/create', 'User::create');
    $routes->post('user/save', 'User::save');
    $routes->get('user/edit/(:num)', 'User::edit/$1');
    $routes->post('user/update/(:num)', 'User::update/$1');
    $routes->get('user/delete/(:num)', 'User::delete/$1');
});