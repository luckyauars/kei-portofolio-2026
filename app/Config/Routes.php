<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Portfolio::index');
$routes->get('/work', 'Portfolio::work');
$routes->get('/experience', 'Portfolio::experience');
$routes->get('/education', 'Portfolio::education');
$routes->get('/about', 'Portfolio::about');
$routes->get('/mobile', 'Portfolio::mobile');
$routes->get('/maintenance', 'Portfolio::maintenance');
