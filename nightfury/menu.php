<?php
$id = isset($_GET['page']) ? $_GET['page'] : "";
$file = (glob('./file_portfolio/*.php'));
echo '<ul class="menu controls">';
if ($id == "") {
	echo '	
	<li data-from="left"><a href="./portfolio.php?page=branding">Branding</a></li>
	<li data-from="right"><a href="./portfolio.php?page=fotografia">Fotografia</a></li>
	<li data-from="left" class="selected"><a href="./portfolio.php?page=home">Home</a></li>
	<li data-from="left"><a href="./portfolio.php?page=video">Video</a></li>
	<li data-from="right"><a href="./portfolio.php?page=web">Web</a></li>';
} else {
	foreach ($file as $fil) {

		$name = str_replace('.php', '', basename($fil));
		if (basename($fil) == $id . ".php") {
			echo '<li data-from="left" class="selected"><a href="./portfolio.php?page=' . $name . '">' . $name . '</a></li>';
		} else {
			echo '<li data-from="left"><a href="./portfolio.php?page=' . $name . '">' . $name . '</a></li>';

		}

	}
}
'</ul>';


?>