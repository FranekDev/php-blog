<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$users = $db->query('select count(*) from users')->find();
$threads = $db->query('select count(*) from posts')->find();
$comments = $db->query('select count(*) from comments')->find();

view('admin/index.view.php', [
    'users' => $users,
    'threads' => $threads,
    'comments' => $comments
]);
