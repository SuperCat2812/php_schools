<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kickass Website</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="contact">
	<?php
	include 'header.php';
	echo '<main>';
	echo '<div class="content container">';
	echo '<h1 class="shadow">Send us an email</h1>';

	echo '<h2 class="shadow">';
	echo 'We won`t read it.';
	echo '</h2>';

	echo '<form action="#" class="contact-form">';
	echo '<label for="your-name">';
	echo 'Your name (required)';
	echo '<input type="text" id="your-name" name="your-name">';
	echo '</label>';

	echo '<label for="your-email">';
	echo 'Your email (required)';
	echo '<input type="email" id="your-email" name="your-email">';
	echo '</label>';

	echo '<label for="your-message">';
	echo 'Your message';
	echo '<textarea id="your-message" name="your-message" cols="40" rows="10"></textarea>';
	echo '</label>';

	echo '<button class="btn btn-white">Send</button>';
	echo '</form>';
	echo '</div>';
	echo '</main>';

	echo '<aside class="pre-footer">';
	echo '<div class="container">';
	echo '<h3>Buy our stuff</h3>';

	echo '<p>';
	echo 'This is a website, so obviously we are trying to sell you something.<br>
				Click here, so we can send you emails you don`t want!';
	echo '</p>';

	echo '<a href="#" class="btn btn-green">Stuff to delete from your inbox</a>';
	echo '</div>';
	echo '</aside>';

	echo '<footer class="site-footer">';
	echo '<div class="container">';
	echo '<p class="small">';
	echo '&copy; Asskick Society, Inc.';
	echo '<span>';
	echo 'design straight stolen from ';
	echo '<a href="http://muz.li">muz.li</a>';
	echo '</span>';
	echo '</p>';
	echo '</div>';
	echo '</footer>';
	?>
</body>

</html>