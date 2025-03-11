<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Ensure the path is correct

use Medoo\Medoo;

// Connect to the database
$database = new Medoo([
    'database_type' => 'mysql',
    'server'        => 'localhost',
    'database_name' => 'todo',
    'username'      => 'root',
    'password'      => '',
    'charset'       => 'utf8'
]);
?>
