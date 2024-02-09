<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kickass Website</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="blog">
	<?php
	include 'header.php';

	echo '<main>';
	echo '<section class="content container">';
	echo '<h1 class="shadow">Big words</h1>';

	echo '<h2 class="shadow">';
	echo 'You need a blog regardless of whether you have something to say.<br>
				Welcome to the Internet.';
	echo '</h2>';

	echo '<div class="post-list">';
	echo '<article class="post">';
	echo '<h1 class="post-title">Croissant gummies jelly-o</h1>';

	echo '<p>Apple pie jujubes danish apple pie brownie. Sugar plum bonbon apple pie gummies sweet roll cake marshmallow. Cotton candy sweet roll lollipop lollipop sugar plum. Brownie sesame snaps chupa chups sweet danish brownie sugar plum apple pie.</p>';

	echo '<p>Jelly beans cake croissant fruitcake powder pastry cookie dragée dessert. Candy tiramisu biscuit bear claw lollipop marshmallow sesame snaps. Marshmallow gummies tootsie roll cotton candy sweet bonbon jelly. Sweet roll wafer oat cake sweet roll dragée oat cake tootsie roll.</p>';

	echo '<p>Croissant gummies jelly-o. Sweet muffin gingerbread lemon drops jelly-o. Powder powder gummies dragée chocolate liquorice.</p>';

	echo '</article>';

	echo '<article class="post">';
	echo '<h1 class="post-title">Sweet muffin gingerbread</h1>';

	echo '<p>Croissant bonbon pie cupcake macaroon carrot cake chocolate bar. Toffee chocolate dragée liquorice chupa chups. Sesame snaps brownie sweet ice cream.</p>';

	echo '<p>Bear claw sesame snaps cookie powder macaroon bonbon sesame snaps cotton candy croissant. Gingerbread pastry lemon drops chocolate cake. Gummies liquorice biscuit pie topping. Candy gummies halvah sweet marzipan chocolate bar tootsie roll.</p>';

	echo '<p>Halvah candy canes jelly-o lollipop tart. Oat cake wafer dessert. Ice cream cotton candy tiramisu tiramisu toffee gummi bears gummi bears macaroon danish. Marshmallow chocolate jelly beans soufflé jelly-o caramels liquorice tootsie roll gummies.</p>';
	echo '</article>';

	echo '<a href="#" class="btn btn-yellow load-older">Older articles</a>';
	echo '</div>';
	echo '</section>';
	echo '</main>';

	echo '<aside class="pre-footer">';
	echo '<div class="container">';
	echo '<h3>Buy our stuff</h3>';

	echo '<p>';
	echo 'This is a website, so obviously we are trying to sell you something.' . '<br>' . '
				Click here, so we can send you emails you don`t want!';
	echo '</p>';

	echo '<a href="#" class="btn btn-green">Stuff to delete from your inbox</a>';
	echo '</div>';
	echo '</aside>';

	include 'footer.php';
	?>
</body>

</html>