<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$config = require base_path('config.php');

$db = App::resolve(Database::class);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please provide a password of at least eight chracters.';
}

if (!Validator::string($name, 1, 255)) {
    $errors['name'] = 'Please provide a name of at least one character.';
}

if (!Validator::passwords($password, $confirm_password)) {
    $errors['confirm_password'] = 'Passwords are not matching.';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
//    header('location: /');
//    exit();
    redirect('/');
} else {
    $db->query('insert into users(name, email, password) values(:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);


    (new Authenticator)->attempt(
        $email, $password
    );

//    header('location: /');
//    exit();
    redirect('/');
}
