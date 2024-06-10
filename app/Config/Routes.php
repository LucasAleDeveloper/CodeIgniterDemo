<?php

namespace Config;

use CodeIgniter\Routing\RouteCollectionInterface;
use CodeIgniter\Routing\Router;

class Routes implements RouteCollectionInterface
{
    public static function routes(Router $routes)
    {
        $routes->group('usuario', ['namespace' => 'App\Controllers'], function($routes) {
            $routes->get('/', 'Usuario::index');
            $routes->get('create', 'Usuario::create');
            $routes->post('store', 'Usuario::store');
            $routes->get('edit/(:num)', 'Usuario::edit/$1');
            $routes->post('update', 'Usuario::update');
            $routes->get('delete/(:num)', 'Usuario::delete/$1');
        });
    }
}

