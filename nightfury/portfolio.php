<?php

$id = ($_GET['page']);


$file = (glob('./file_portfolio/*.php', ));

foreach ($file as $fink) {
    if (basename($fink) == $id . ".php") {
        include $fink;
    }
}

?>