<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$comment = $db->query('select * from comments where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($comment['user_id'] === Session::get('user')['id']);

$db->query('delete from comments where id = :id', [
    'id' => $_POST['id']
]);

redirect("/thread?id={$comment['post_id']}");
