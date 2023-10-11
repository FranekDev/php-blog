<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$comment = $db->query('select * from comments where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

//dd($_SERVER['REQUEST_URI']);

view('comments/edit.view.php', [
    'comment' => $comment
]);
