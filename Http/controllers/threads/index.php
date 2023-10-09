<?php

use Core\App;
use Core\Database;

$threads = App::resolve(Database::class)->query('select posts.*, users.id, users.name from posts inner join users on posts.user_id = users.id')->get();
//dd($threads);
view('threads/index.view.php', [
    'threads' => $threads
]);
