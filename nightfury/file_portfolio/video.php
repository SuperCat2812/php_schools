<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nightfury_home/video</title>

	<link rel="stylesheet"
		href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&amp;subset=latin,latin-ext">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="js/jquery-2.1.1.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php
	include 'header.php';

	echo '<main>
		<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Portfólio našich prác</h1>
				</div>
			</header>
			<div class="post-content">
				<div class="container">

					<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>
';
	include 'menu.php';
	echo '</div>

				<section class="gallery">
					<div class="gallery-set container" id="video">
						<a href="img/zim/image-1.jpg">
							<img src="img/zim/thumb-1.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-2.jpg">
							<img src="img/zim/thumb-2.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-3.jpg">
							<img src="img/zim/thumb-3.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-4.jpg">
							<img src="img/zim/thumb-4.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-5.jpg">
							<img src="img/zim/thumb-5.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-6.jpg">
							<img src="img/zim/thumb-6.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-7.jpg">
							<img src="img/zim/thumb-7.jpg" height="192" width="383" alt="space invader">
						</a>
					</div>
				</section>
			</div>
		</article>
	</main>

';
	include 'footer.php';
	;
	?>
	<!-- scripts -->
	<script src="js/lightbox.js"></script>

</body>

</html>