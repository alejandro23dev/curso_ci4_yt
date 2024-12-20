<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Authentication::login');
$routes->get('Authentication/register', 'Authentication::register');