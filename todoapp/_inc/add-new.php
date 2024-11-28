<!--<p>-->
<!--    you wrote <strong>--><?php //echo $_GET['message']; 
                                ?><!--</strong><br>-->
<!--    and tits are <strong>--><?php //echo $_GET['tits'];
                                ?><!--</strong><br>-->
<!--    but also ball is <strong>--><?php //echo $_GET['balls'];
                                    ?><!--</strong>-->
<!--</p>-->


<!--//?page=2-->
<!--//($_GET['page']-1)*10;-->
<!---->
<!--//?sort_by="title"&order="desc"-->
<!--$_GET['sort_by'];-->
<!--$_GET['order'];-->

<?php

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
    header('Location: /todoapp');
    die();
}
