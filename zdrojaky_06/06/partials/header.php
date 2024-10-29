<?php

	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
	if ( $page_name == 'index' ) $page_name = 'home';

?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo ucfirst($page_name) ?> / Kickass Website</title>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?php echo $page_name ?>">

	<header class="site-header">
		<nav class="container">
			<ul class="menu">
				<?php 

					$pages = glob('*.php');
					$pages = array_reverse($pages);
					
					foreach( $pages as $file ) {
						
						$page = basename($file, '.php');
						if ( $page == 'index' ) $page = 'home';

						if ( $page_name == $page ) echo '<strong>'. ucfirst($page) .'</strong>';
						else echo '<li><a href="'. $file .'">'. ucfirst($page) .'</a></li>';
				
					}

				?>
			</ul>
		</nav>
	</header>

	<main>