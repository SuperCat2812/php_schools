<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kickass Website</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="gallery">
	<?php
	include 'header.php';

	echo '<main>';
	echo '<section class="content container">';
	echo '<h1 class="shadow">' . 'Sweet Gallery</h1>';
	echo '<h2 class="shadow">' . 'It`s got images in it.</h2>';

	echo '<div class="image-grid group">';
	echo '<img src="img/01.png" class="gallery-img" alt="ms marvel">';
	echo '<img src="img/02.png" class="gallery-img" alt="ms marvel">';
	echo '<img src="img/03.png" class="gallery-img" alt="ms marvel">';
	echo '<img src="img/04.png" class="gallery-img" alt="ms marvel">';
	echo '<img src="img/05.png" class="gallery-img" alt="ms marvel">';
	echo '<img src="img/06.png" class="gallery-img" alt="ms marvel">';
	echo '</div>';
	echo '</section>';
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

	include 'footer.php';
	?>
</body>

</html>