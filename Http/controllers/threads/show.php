<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$thread = $db->query('select posts.*, users.name, users.email from posts join users on posts.user_id = users.id where posts.id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view('threads/show.view.php', [
    'thread' => $thread
]);
