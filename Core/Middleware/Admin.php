<?php

namespace Core\Middleware;

use Core\Session;

class Admin
{
    public function handle(): void
    {
        if((!Session::has('user') ?? false) || (Session::get('user')['email'] !== 'admin@admin.com')) {
            header('location: /');
            exit();
        }
    }
}