<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$comments = $db->query('select * from comments')->get();

view('admin/comments/index.view.php', [
    'comments' => $comments
]);
