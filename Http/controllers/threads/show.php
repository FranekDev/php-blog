<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$thread = $db->query('select posts.*, users.name, users.email from posts join users on posts.user_id = users.id where posts.id = :id', [
    'id' => $_GET['id'] ?? -1
])->findOrFail();

$comments = $db->query('select * from comments where post_id = :post_id', [
    'post_id' => $_GET['id']
])->get();

view('threads/show.view.php', [
    'thread' => $thread,
    'comments' => $comments
]);
