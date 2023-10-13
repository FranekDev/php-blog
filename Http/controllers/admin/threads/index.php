<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$threads = $db->query('select * from posts')->get();

view('admin/threads/index.view.php', [
    'threads' => $threads
]);
