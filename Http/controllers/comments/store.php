<?php

use Core\App;
use Core\Database;
use Core\Validator;

//dd($_POST);

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string(trim($_POST['comment']), 1, 255)) {
    $errors['comment'] = 'A comment of no more than 255 characters is required.';
}

if (!empty($errors)) {
    return view('threads/show.view.php');
}

date_default_timezone_set('Europe/Warsaw');
$date = date("Y-m-d H:i:s");

$db->query('insert into comments(body,post_id, user_id, last_edit) values (:body, :post_id, :user_id, :last_edit)', [
    'body' => trim($_POST['comment']),
    'post_id' => $_POST['post_id'],
    'user_id' => $_POST['user_id'],
    'last_edit' => $date
]);

redirect("/thread?id={$_POST['post_id']}");
