<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$comment = $db->query('select * from comments where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($comment['user_id'] === $_SESSION['user']['id']);

$errors = [];

if (!Validator::string(trim($_POST['body']), 1, 255)) {
    $errors['comment'] = 'A comment of no more than 255 characters is required.';
}

if (count($errors)) {
    return view('comments/edit.view.php', [
        'errors' => $errors,
        'comment' => $comment
    ]);
}

date_default_timezone_set('Europe/Warsaw');
$date = date("Y-m-d H:i:s");

$db->query('update comments set body = :body, last_edit = :last_edit where id = :id', [
    'body' => htmlspecialchars(trim($_POST['body'])),
    'last_edit' => $date,
    'id' => $_POST['id']
]);

redirect("/thread?id={$comment['post_id']}");
