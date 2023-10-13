<?php

// Pages
$router->get('/', 'index.php');
$router->get('/about', 'about.php');

// Log in
$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

// Register
$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

// Threads
$router->get('/threads', 'threads/index.php')->only('auth');
$router->post('/threads', 'threads/store.php')->only('auth');

// Thread
$router->get('/thread', 'threads/show.php')->only('auth');
$router->get('/thread/edit', 'threads/edit.php')->only('auth');
$router->patch('/threads', 'threads/update.php')->only('auth');
$router->delete('/threads', 'threads/destroy.php')->only('auth');

// Comment
$router->get('/comment/edit', 'comments/edit.php');
$router->post('/thread', 'comments/store.php')->only('auth');
$router->patch('/thread', 'comments/update.php')->only('auth');
$router->delete('/thread', 'comments/destroy.php')->only('auth');

// Admin
$router->get('/admin', 'admin/index.php')->only('admin');
$router->get('/admin/users', 'admin/users/index.php')->only('admin');
$router->get('/admin/threads', 'admin/threads/index.php')->only('admin');
$router->get('/admin/comments', 'admin/comments/index.php')->only('admin');

// Admin Delete
$router->delete('/admin/users', 'admin/users/destroy.php')->only('admin');
$router->delete('/admin/threads', 'admin/threads/destroy.php')->only('admin');
$router->delete('/admin/comments', 'admin/comments/destroy.php')->only('admin');
