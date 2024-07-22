<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/*Rutas Backend/Usuario para el Registro*/
$routes->get('/registro', 'usuarios_controller::create');
$routes->post('/enviar-form', 'usuarios_controller::formValidation'); 

/*Rutas Backend/Usuario para el Login*/
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarLogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter'=>'auth']);
$routes->get('/logout', 'login_controller::logout');