<?php
//$item=5;
//echo 'to to';
//echo $item;
//echo'<br>';
//$item++;
//echo $item;
//echo'<br>';
//$item=$item+1;
//echo $item;
//echo'<br>';
//$item+=6;
//echo $item;
//echo'<br>';
//echo 11%3;
//echo'<br>';
//echo floor(11/3);
//echo'<br>';
//echo (int)(11/3);
//echo'<br>';
//if($item<100){
//    echo 'urobi';
//}elseif ($item){
//
//// code...
//}else {
//    echo 'neurobi';
//}

$money=300;
$item_count =300;
$item_price=400;

if (is_string($item_count)==true||is_string($item_price)){echo 'is not a number';}else {
    if ($item_price!=0&&$item_count!=0){
    if ((int)($item_count*$item_price)<$money) {
        echo 'cupi';
    } elseif ((int)($item_count*$item_price)>$money) {
        echo 'nema';
    } else {
        echo 'error';
    }}
}
