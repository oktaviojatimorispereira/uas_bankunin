<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Pages::index');
$routes->get('/login', 'Pages::lgnpages');
$routes->get('/rekening', 'Pages::rek');
$routes->get('/register', 'Pages::reg');
$routes->get('/verifikasi', 'Pages::ver');
$routes->get('/setlogin', 'Pages::set');
$routes->get('/resetpass', 'Pages::reset');
$routes->get('/ubahpass', 'Pages::ubah');
