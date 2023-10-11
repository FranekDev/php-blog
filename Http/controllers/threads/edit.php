<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$thread = $db->query('select * from posts where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view('threads/edit.view.php', [
    'thread' => $thread
]);
