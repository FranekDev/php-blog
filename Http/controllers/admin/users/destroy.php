<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

// Find the user
$user = $db->query('select * from users where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize(Session::get('user')['email'] === 'admin@admin.com');

// Delete the user
$db->query('delete from users where id = :id', [
    'id' => $_POST['id']
]);

// Redirect
redirect('/admin/users');
