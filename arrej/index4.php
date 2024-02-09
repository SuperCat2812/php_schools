<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="./adventure/css/bootstrap.min.css">
	<link rel="stylesheet" href="./adventure/css/main.css">
</head>

<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>
	<?php

	$badass = "Brienne of Tarth";

	$arr = [
		"Princess Bubblegum",
		"Imperator Furiosa",
		"Brinne of Tarth",
		$badass,
		"bulbasaur"
	];

	// echo $arr[1].'<br>';
// echo $arr[1][0];
	
	$arr[3] = 'Kamala Khan';
	unset($arr[3]);

	array_push($arr, "lyra Belacqua", "Aprial Ryan");
	$who = array_pop($arr);
	echo $who;

	$asshole = 'Donald Trump';
	array_unshift($arr, $asshole);

	echo '<pre>';
	print_r($arr);
	echo '</pre>';

	echo count($arr);
	// if(count($arr)){
// 	//show articles
// } else{
// 	//say *sorry notihing found*
// };
// sort($arr);
// rsort($arr);
	
	// array_reverse
	
	// $arr=array(
	// 	"Princess Bubblegum",
	// 	"Imperator Furiosa",
	// 	"Brinne of Tarth",
	// 	$badass,
	// 	"bulbasaur"
	// );
	// array();
	echo '<ul class="list-graup text-left">';
	$arr=array_values(array_filter($arr));
	foreach ($arr as $key => $value) {
	if (! $value )continue;
		echo "<li class=\"list-group-item\">
		<small class=\"text-info\"> $key &hellip; </small>
		$value
		</li>";
	
	}
	echo '</ul>';
	
	// while ($arr) {
	// 	echo array_pop($arr);
	// 	if($arr) echo '<span class="text-warning">/</span>';
	// }
	// for( $i=0; $i< 1000; $i++ ){
    //     echo'<p>'. $i .'</p>';
    // }

	?>
</body>

</html>