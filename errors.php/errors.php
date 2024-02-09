<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="../adventure/css/bootstrap.min.css">
	<link rel="stylesheet" href="../adventure/css/main.css">
</head>

<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

	// ulozime hodnoty do premennych
	$item_count = 5;
	$item_price = 350;

	// vynasobime ich a vysledok ulozime do premennej $sum
	// $sum = $tem_count * $item_prce;
	
	// premennu $sum vypiseme na stranku
	// cize na stranke sa objavi cislo
	// echo $sum;
	


	// $max = rand(10, 100);
	
	// $min = rand(10, 100);
	

	// if ($max > $min) {
	// 	echo $max . "<br>";
	// 	echo "max > min" . "<br>";
	// } elseif ($max < $min) {
	// 	echo $min . "<br>";
	// 	echo "max < min" . "<br>";
	// } elseif ($max == $min || $max > $min) {
	// 	echo $max . "<br>";
	// 	echo $min . "<br>";
	// 	echo "max = min max>min" . "<br>";
	// } else {
	// 	echo $max . "<br>";
	// 	echo $min . "<br>";
	// 	echo "max = min" . "<br>";
	// }
	

	// // ??
	

	// if ($max_text > $min_text) {
	// 	echo $min_text . "<br>";
	// 	echo $max_text . "<br>";
	// 	echo "max_text > min_text";
	// } elseif ($max_text < $min_text) {
	// 	echo $max_text . "<br>";
	// 	echo $min_text . "<br>";
	
	// 	echo "max_text < min_text";
	// } elseif ($max_text == $min_text) {
	// 	echo $max_text . "<br>";
	// 	echo $min_text . "<br>";
	// 	echo "max_text = min_text";
	// }
	// $c=readline("numbers");
	// $min=4;
	// if(is_int($c)!=1){
	// 	echo "<br>"."e";
	// }
	echo '<p>' . PHP_EOL;
	echo "I`m firestrarter, <strong>twistes</strong> firestater. " . "<br>" . PHP_EOL;
	echo 'I`m firestrarter, <strong>twistes</strong> firestater. ' . "<br>" . PHP_EOL;
	echo 'I\'m firestrarter, <strong>twistes</strong> firestater. ' . "<br>" . PHP_EOL;
	echo 'Punk detonator.' . PHP_EOL; //
	echo '<p>' . PHP_EOL;
	echo '<p>' . PHP_EOL;
	echo 'You bought' . $item_count . ' item for ' . $item_price . ' €.' . "<br>" . PHP_EOL;
	echo "You bought $item_count  item for  {$item_price} €." . "<br>" . PHP_EOL;
	echo '<blockquite>' . PHP_EOL;
	echo '<p>' . PHP_EOL;
	echo '   Sucking at something <br>
		is the first step<br>
 		to becoming<br>
  		sorta good at something' . PHP_EOL;
	echo '</p>' . PHP_EOL;
	echo '</blockquite>' . PHP_EOL;


	echo "\t<p>" . PHP_EOL;
	echo "\t\tYou bought $item_count  item for  {$item_price} €." . "<br>" . PHP_EOL;
	echo "\t<p>" . PHP_EOL;
	?>
</body>

</html>