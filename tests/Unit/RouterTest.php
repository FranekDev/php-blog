<?php

use Core\Router;

test('Router contain routes', function () {

    $router = new Router();

    $router->get('/', 'index.php');
    $router->post('/threads', 'threads/store.php')->only('auth');
    $router->patch('/threads', 'threads/update.php')->only('auth');
    $router->delete('/thread', 'threads/destroy.php')->only('admin');

    $expected = [
        [
            'method' => 'GET',
            'uri' => '/',
            'controller' => 'index.php',
            'middleware' => null
        ],
        [
            'method' => 'POST',
            'uri' => '/threads',
            'controller' => 'threads/store.php',
            'middleware' => 'auth'
        ],
        [
            'method' => 'PATCH',
            'uri' => '/threads',
            'controller' => 'threads/update.php',
            'middleware' => 'auth'
        ],
        [
            'method' => 'DELETE',
            'uri' => '/thread',
            'controller' => 'threads/destroy.php',
            'middleware' => 'admin'
        ]
    ];


    expect($router->routes())->toMatchArray($expected);

});

