<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\UserController;
use App\Controllers\Api;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//admin
$routes->get('/urself', [AdminController::class, 'index']);
$routes->get('/urself/users', [AdminController::class, 'users']);
$routes->get('/urself/report', [AdminController::class, 'report']);
$routes->get('/urself/feedback', [AdminController::class, 'feedback']);
$routes->get('/urself/about-us', [AdminController::class, 'us']);
$routes->get('/urself/contact', [AdminController::class, 'contact']);

//user
$routes->get('/', [UserController::class, 'index']);
$routes->get('/personality-test', [UserController::class, 'personality']);
$routes->get('/aptitude-test', [UserController::class, 'aptitude']);
$routes->get('/report', [UserController::class, 'report']);
$routes->get('/feedback', [UserController::class, 'feedback']);
$routes->get('/about-us', [UserController::class, 'us']);
$routes->get('/contact', [UserController::class, 'contact']);

//user account
$routes->get('(:any)/profile', [UserController::class, 'profile']);
$routes->put('/profile/(:any)', [UserController::class, 'update_profile']);
$routes->get('/profile/(:any)', [UserController::class, 'deletePhoto']);

//personality-test
$routes->post('/psy', [UserController::class, 'psy']);
$routes->delete('/psy/(:any)', [UserController::class, 'deletePsy']);

//rest api
// $routes->resource("api");
$routes->post('api', [Api::class, 'create']);
$routes->get('api/(:any)', [Api::class, 'show']);


