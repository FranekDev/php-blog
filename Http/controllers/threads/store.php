<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['title'], 1, 255)) {
    $errors['title'] = 'A title of no more than 255 characters is required';
}

if (!empty($errors)) {
    return view('threads/index.view.php', [
        'errors' => $errors
    ]);
}

$user_id = $db->query('select id from users where email = :email', [
    'email' => $_SESSION['user']['email']
])->find();

date_default_timezone_set('Europe/Warsaw');
$date = date("Y-m-d H:i:s");


$db->query('insert into posts(title, last_edit, user_id) values(:title, :last_edit, :user_id)', [
    'title' => trim($_POST['title']),
    'last_edit' => $date,
    'user_id' => $user_id['id']
]);

header('location: /threads');
exit();