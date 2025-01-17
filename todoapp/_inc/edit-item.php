<?php

//die($_POST('message'));
//include

include 'config.php';

//update item
$affected = $database->update("items", [
    'text' => $_POST['message']
],[
    'id' => $_POST['id']
]);

// success
if ($affected) {
    //    echo 'yay,new item added<br>';
    //    echo '<a href="/todoapp">back home</a>';
    header('Location: '.$site_url.'index.php');
die();
}
