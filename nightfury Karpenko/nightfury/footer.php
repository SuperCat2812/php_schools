<?php
echo '<aside class="pre-footer">
		<div class="container">
			<p>
				<strong>Zaujali sme Vás pre nový projekt?</strong>
				Jednoducho nám zavolajte alebo napíšte.
			</p>

			<ul class="menu personal">
			
				<li><i class="fa fa-phone"></i><a href="tel:' . $contact_phone . '">' . $contact_phone . '</a></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:' . $contact_email . '">' . $contact_email . '</a></li>
			</ul>
		</div>
	</aside>

	<footer>
		<div class="container">
			<p class="logo">
				<strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
			</p>
			<p class="author">
				Návrh a design pripravil <a href="mailto:tomas@cloudfender.com">tomas@cloudfender.com</a>
			</p>
			';
			include 'footer_menu.php';
			echo '
		</div>
	</footer>';
?>