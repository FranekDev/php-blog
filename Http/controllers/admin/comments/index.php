<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$comments = $db->query('select * from comments order by id asc')->get();

//$json = $db->query('select json_arrayagg(body) from comments')->get();

//dd($json);

view('admin/comments/index.view.php', [
    'comments' => $comments
]);
