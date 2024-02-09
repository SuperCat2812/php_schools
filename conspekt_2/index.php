<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

	require 'fun_stuff.php';
	$all_comments = 0;
// 	echo'<pre>';
// print_r($adventure);
// echo '</pre>';

// var_dump($adventure);
	?>

	<div class="row">

<?php
foreach ($adventure as $dude){
// var_dump($dude);
	echo '<article>';
	echo'<h4>'.$dude->who.'</h4>';
	echo'<p>'.$dude->wat.'</p>';
	echo '</article>';
}

?>
<?php
// json_decode($adventure); // decode is converted to php object format to json object format
// json_encode($adventure);// encode is converted to json object format to php object format
?>

	</div>
	<?php

	// if (true) {
	// 	# code...
	// } 
	
	// else {
	// 	# code...
	// }
	echo "Lorem ipsum dolor sit amet consectetur adipisicing elit." . $all_comments . " Consectetur animi, placeat expedita, id maxime ad, possimus dignissimos quasi illum dolorum repellendus saepe iste eos. Molestiae reprehenderit id nulla aliquam assumenda?";

	$url = "http://bing.hu";
	$title = "Bing, the only way to google";

	echo '<a href="' . $url . '">' . $title . '</a>';

	echo '<pre>';
	print_r($dude);
	echo '<pre>';
	?>

	<div class="row">
		<p>
			number of dudes: <strong>
				<?php echo count($adventure) ?>
			</strong><br>
			number of comments: <strong>
				<?php echo $all_comments ?>
			</strong>
		</p>
	</div>

</body>

</html>