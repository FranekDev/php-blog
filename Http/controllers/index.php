<?php

use Core\Session;

view('index.view.php', [
    'user' => Session::get('user')
]);
