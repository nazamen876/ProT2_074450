<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/* Rutas de home */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');

/* Rutas del registro */
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/* Rutas del login */
$routes->get('/login', 'login_controller::index');
$routes->post('/enviar-login', 'login_controller::auth');
$routes->get('/logout', 'login_controller::logout');
