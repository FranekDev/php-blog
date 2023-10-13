<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// Find the thread
$thread = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($_SESSION['user']['email'] === 'admin@admin.com');

// Delete the thread
$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

// Redirect
redirect('/admin/threads');
