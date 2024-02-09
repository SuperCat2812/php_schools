<?php
$id = ($_GET['id']);
echo "<p style='font-size:80px'>" . $id . "</p><br>";
$img = (glob("$id/images/*"));
$img_activ = (glob("$id/thumbs/*"));
$count = count($img);
for ($i = 0; $i < $count; $i++) {
    echo "<a href='" . $img[$i] . "'><img src='" . $img_activ[$i] . "' width='200' style='margin:15px'></a>";
}

?>