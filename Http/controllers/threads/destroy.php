<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// find thread
$thread = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($thread['user_id'] === $_SESSION['user']['id']);

// delete thread
$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

// redirect
redirect('/threads');