<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'basa.php';
    $sum = 0;
    $max_sum = 100;

    if ($sum > $max_sum) {
        echo "<div class=result>not a value</div>";
    } else {
        echo "<div class=result>value</div>";
    }

    $pole = ['Lopta' => 100, 'jahoda' => 20, 'lyze' => 5, 'maliar' => 18, 'Baja' => 88888888,];
    // $arr=["Lopta"=>'lopta',"jahoda"=>'jahoda','lyze'=>'lyze','maliar'=>'maliar','baja'=>'baja'];
    
    foreach ($pole as $key => $value) {
        echo '<p>'.$key.' or '.$value.'</p>';
    }
$min=(min($pole));
foreach ($pole as $key => $value) {
    if ($value==$min) {
        echo '<p> min '.$key.' or '.$value.'</p>';
    }
}

    // foreach($tovar as $index){?>
    <!-- <p><?php $index["name"] . 'za' . $index["prise"] ?></p>;<?php
      // }?>
</body>
</html>