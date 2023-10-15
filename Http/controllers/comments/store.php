<?php

use Core\App;
use Core\Database;
use Core\Session;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string(trim($_POST['comment']), 1, 255)) {
    $errors['comment'] = 'A comment of no more than 255 characters is required.';
}

if (!empty($errors)) {

    $thread = $db->query('select posts.*, users.name, users.email from posts join users on posts.user_id = users.id where posts.id = :id', [
        'id' => $_GET['id'] ?? -1
    ])->findOrFail();

    $comments = $db->query('select comments.*, users.name, users.email from comments join users on comments.user_id = users.id where comments.post_id = :post_id and comments.user_id = users.id', [
        'post_id' => $_GET['id']
    ])->get();

    return view('threads/show.view.php', [
        'errors' => $errors,
        'thread' => $thread,
        'comments' => $comments
    ]);
}

date_default_timezone_set('Europe/Warsaw');
$date = date("Y-m-d H:i:s");

$user_id = $db->query('select id from users where email = :email', [
    'email' => Session::get('user')['email']
])->find();

$db->query('insert into comments(body,post_id, user_id, last_edit) values (:body, :post_id, :user_id, :last_edit)', [
    'body' => trim($_POST['comment']),
    'post_id' => $_POST['post_id'],
    'user_id' => $user_id['id'],
    'last_edit' => $date
]);

redirect("/thread?id={$_POST['post_id']}");
