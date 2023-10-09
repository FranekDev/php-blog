<?php

$router->get('/', 'index.php');
$router->get('/threads', 'threads.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');
