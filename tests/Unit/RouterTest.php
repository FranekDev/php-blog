<?php

use Core\Router;
use Mockery;

test('Router contain routes', function () {

    $router = new Router();
//    $router = Mockery::mock(Router::class);

//    $router->shouldReceive('get')->with('/threads', 'index.php');

    $router->get('/', 'index.php');
    $router->post('/threads', 'threads/store.php')->only('auth');
    $router->patch('/threads', 'threads/update.php')->only('auth');
    $router->delete('/thread', 'threads/destroy.php')->only('admin');
//    $router->shouldReceive('routes')->with([
//        'method' => 'GET'
//    ])->getMock();

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

