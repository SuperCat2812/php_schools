<?php

//show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//include '';
//require '';
//require_once '';

// require stuff

require_once 'vendor/autoload.php';

// connect to db
use Medoo\Medoo;

$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'todo',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);

echo '<pre>';
print_r($database->info());
echo '</pre>';