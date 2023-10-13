<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// Find the comment
$comment = $db->query('select * from comments where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($_SESSION['user']['email'] === 'admin@admin.com');

// Delete the comment
$db->query('delete from comments where id = :id', [
    'id' => $_POST['id']
]);

// Redirect
redirect('/admin/comments');
