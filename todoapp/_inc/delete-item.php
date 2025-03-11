<?php

//die($_POST('message'));
//include

include 'config.php';

//update item
$affected = $database->delete("items", [
    'id' => $_POST['id']
]);

// success
if ($affected) {
    //    echo 'yay,new item added<br>';
    //    echo '<a href="/todoapp">back home</a>';
    header('Location: '.$base_url.'index.php');
die();
}
