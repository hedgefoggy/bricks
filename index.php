<?php
require_once 'Database.php';

$users = Database::getInstance()->query("SELECT * FROM users");

var_dump($users->count());
die;
if ($users->error()) {
    echo 'we have an error';
} else {
    foreach ($users->results() as $user) {
        echo $user->username . '<br>';
    }
}

