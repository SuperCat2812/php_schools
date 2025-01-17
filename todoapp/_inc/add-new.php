<?php

//die($_POST('message'));
//include

include 'config.php';
//add new stuff
$id = $database->insert("items", [
    'text' => $_POST['message'],
]);

// success

if ($id) {
    //    echo 'yay,new item added<br>';
    //    echo '<a href="/todoapp">back home</a>';
//    header('Location: /todoapp');
    die('success');
}
