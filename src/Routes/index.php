<?php

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\UniversityController;
use App\Controllers\UsersController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'Login');
$router->get('/dashboard', DashboardController::class, 'Dashboard');
$router->get('/users', UsersController::class, 'Users');
$router->get('/university', UniversityController::class, 'Uni');




$router->dispatch();
