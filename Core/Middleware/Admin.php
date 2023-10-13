<?php

namespace Core\Middleware;

class Admin
{
    public function handle(): void
    {
        if($_SESSION['user']['email'] !== 'admin@admin.com') {
            redirect('/');
        }
    }
}