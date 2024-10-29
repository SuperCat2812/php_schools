<?php
$contact_phone = '+421 900 111 222';
$contact_email = 'email@mailinator.com';
echo '<header>';
echo '<div class="contact-bar">';
echo '<div class="container">';
echo '<ul class="menu personal">';
echo '<li><i class="fa fa-phone"></i><a href="tel:' . $contact_phone . '">' . $contact_phone . '</a></li>';
echo '<li><i class="fa fa-envelope"></i><a href="mailto:' . $contact_email . '">' . $contact_email . '</a></li>';
echo '</ul>';
echo '<ul class="menu social">';
echo '<li><a href="#" class="social-icon"><i class="fa fa-github"></i></a></li>';
echo '<li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>';
echo '<li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>';
echo '<li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo'<div class="nav-bar">
			<div class="container">
				<h1 class="logo">
					<a href="#">
						<strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
					</a>
				</h1>';
include 'header_menu.php';
echo '</header>';
?>