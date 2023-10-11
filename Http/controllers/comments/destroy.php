<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$comment = $db->query('select * from comments where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($comment['user_id'] === $_SESSION['user']['id']);

$db->query('delete from comments where id = :id', [
    'id' => $_POST['id']
]);

redirect("/thread?id={$comment['post_id']}");
