<?php

$router->get('/', 'index.php');
$router->get('/threads', 'threads.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');
$router->get('/login', 'session/create.php');
$router->get('/register', 'registration/create.php');
