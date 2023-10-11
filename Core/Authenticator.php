<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password): bool
    {
        $user = App::resolve(Database::class)->query('select * from users where email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email,
                    'name' => $user['name'],
                    'id' => $user['id']
                ]);

                return true;
            }
        }

        return false;
    }

    public static function login($user): void
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
            'name' => $user['name'],
            'id' => $user['id']
        ];

        session_regenerate_id(true);
    }

    public static function logout()
    {
        Session::destroy();
    }
}