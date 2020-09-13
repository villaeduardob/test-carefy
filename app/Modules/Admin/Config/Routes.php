<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('boards', ['namespace' => 'App\Modules\Admin\Controllers'], function($subroutes){

	$subroutes->add('list', 'Home::index');

});