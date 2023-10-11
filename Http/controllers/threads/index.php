<?php

use Core\App;
use Core\Database;

$threads = App::resolve(Database::class)->query(
    'select posts.*, users.name, users.email from posts 
    join users on posts.user_id = users.id
    order by posts.id desc'
)->get();

view('threads/index.view.php', [
    'threads' => $threads
]);
