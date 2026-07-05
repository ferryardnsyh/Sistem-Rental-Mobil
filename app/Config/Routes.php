<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::processLogin');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index');

// Mobil
$routes->get('mobil', 'Mobil::index');
$routes->get('mobil/tambah', 'Mobil::tambah');
$routes->post('mobil/simpan', 'Mobil::simpan');
$routes->get('mobil/edit/(:num)', 'Mobil::edit/$1');
$routes->post('mobil/update/(:num)', 'Mobil::update/$1');
$routes->get('mobil/hapus/(:num)', 'Mobil::hapus/$1');

// Booking
$routes->get('booking', 'Booking::index');
$routes->get('booking/tambah', 'Booking::tambah');
$routes->post('booking/simpan', 'Booking::simpan');
$routes->get('booking/edit/(:num)', 'Booking::edit/$1');
$routes->post('booking/update/(:num)', 'Booking::update/$1');
$routes->get('booking/hapus/(:num)', 'Booking::hapus/$1');

// Approval Booking
$routes->get('booking/setujui/(:num)', 'Booking::setujui/$1');
$routes->get('booking/tolak/(:num)', 'Booking::tolak/$1');
$routes->get('booking/selesai/(:num)', 'Booking::selesai/$1');

// User
$routes->get('user', 'User::index');

$routes->get('user/tambah', 'User::tambah');
$routes->post('user/simpan', 'User::simpan');

$routes->get('user/edit/(:num)', 'User::edit/$1');
$routes->post('user/update/(:num)', 'User::update/$1');

$routes->get('user/hapus/(:num)', 'User::hapus/$1');

// about
$routes->get('about', 'About::index');

// customer
$routes->get('customer', 'Customer::index');
$routes->get('customer/mobil', 'Customer::mobil');
$routes->get('customer/detail/(:num)', 'Customer::detail/$1');

$routes->get('customer/booking/(:num)', 'Customer::booking/$1');
$routes->post('customer/simpanBooking', 'Customer::simpanBooking');

$routes->get('customer/bookingSaya', 'Customer::bookingSaya');

// about
$routes->get('about', function () {
    return view('customer/about', [
        'title' => 'About Us'
    ]);
});
$routes->get('customer/about', 'Customer::about');
$routes->get('customer/profil', 'Customer::profil');

// edit dan update
$routes->get('customer/profil/edit', 'Customer::editProfil');
$routes->post('customer/profil/update', 'Customer::updateProfil');

// rubah password
$routes->get('customer/profil/password', 'Customer::ubahPassword');
$routes->post('customer/profil/password/update', 'Customer::updatePassword');