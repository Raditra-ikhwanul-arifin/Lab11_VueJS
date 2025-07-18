<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('user/login', 'User::login');
$routes->post('user/login', 'User::login'); // Untuk menangani request POST juga
$routes->get('user/logout', 'User::logout');
$routes->get('post', 'Post::index');


$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('page/tos', 'Page::tos');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
$routes->get('/kategori/(:num)', 'Artikel::kategori/$1');
$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/create', 'AjaxController::create');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->post('ajax/add', 'AjaxController::add');
$routes->post('ajax/save', 'AjaxController::save');
$routes->post('ajax/edit/(:num)', 'AjaxController::edit/$1');
$routes->delete('ajax/delete/(:num)', 'AjaxController::delete/$1');


$routes->setAutoRoute(true);
$routes->group('admin', ['filter' => 'auth'], function($routes) { 
    $routes->get('artikel', 'Artikel::admin_index'); 
    $routes->add('artikel/add', 'Artikel::add'); 
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1'); 
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1'); 
});