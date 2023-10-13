<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// Find the user
$user = $db->query('select * from users where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($_SESSION['user']['email'] === 'admin@admin.com');

// Delete the user
$db->query('delete from users where id = :id', [
    'id' => $_POST['id']
]);

// Redirect
redirect('/admin/users');
