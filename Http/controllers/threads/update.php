<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

// find the corresponding thread
$thread = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($thread['user_id'] === $_SESSION['user']['id']);

$errors = [];

if (!Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = 'A title of no more that 100 characters is required';
}

if (!Validator::string($_POST['description'], 1, 1000)) {
    $errors['title'] = 'A description of no more that 1,000 characters is required';
}

if (count($errors)) {
    return view('threads/edit.view.php', [
        'errors' => $errors,
        'thread' => $thread
    ]);
}
$db->query('update posts set title = :title, description = :description where id = :id', [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'id' => $_POST['id']
]);

redirect('/threads');
