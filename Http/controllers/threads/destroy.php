<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

// find thread
$thread = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($thread['user_id'] === Session::get('user')['id']);

// delete thread
$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

// redirect
redirect('/threads');