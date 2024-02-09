<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta item_count="viewport" content="width=device-width, initial-scale=1">

	<title>CAT</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body class="container">
	<?php
	require 'database_items.php';
	// $item_count = 5;
	// $item_item_price = 300;
	
	// add new item to basket
	// $item_count = $item_count + 1;
	?>
	<?php foreach ($products as $items): ?>
		<?php
		echo $items['item_count'];

		echo '<br>';
		?>
	<?php endforeach ?>
	<?php
	// add products to the list
	$sum = $items['item_price'] + $items['item_price'];

	// echo $item_price;
	
	echo '<br>-------<br>';

	echo $sum;
	echo '<br>';
	// echo 11/3;
	?>
	<?php

	echo '<br>';
	echo $max_item;

	?>
</body>

</html>