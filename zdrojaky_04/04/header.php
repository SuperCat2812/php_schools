<?php 
	
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
	if ( $page_name == 'index' ) $page_name = 'home';

?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Kickass Website</title>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $page_name ?>">

	<header class="site-header">
		<nav class="container">
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>