<?php

include_once '_inc/header.php';


// toto najde vsetky albumy vasa patejdla na spotify
// ma tam ID: 0CbbftseLRwYyUdmOXvH6l
// staci zmenit to ID v adrese a ID ineho interpreta a vypise to jeho albumy

$json2 = file_get_contents("./albums/albums.json");
$json=file_get_contents("https://itunes.apple.com/search?term=vaso+patejdl&entity=album");
$json2 = json_decode($json2);
$json=json_decode($json);


// NAMIESTO TOHO SPOTIFY LINKU TAM TY POUZI ITUNES LINK, NAPR:
// https://itunes.apple.com/search?term=vaso+patejdl&entity=album
// https://itunes.apple.com/search?term=kanye+west&entity=album
// https://itunes.apple.com/search?term=kolowrat&entity=album



// pravda je, ze spotify sa medzitym zmenilo a toto uz nefunguje
// ale nechavam ten kod tu pre inspiraciu
// tvoja uloha bude
foreach ( $json2->items as $album )
{
	$name = $album->name;
	$url  = $album->external_urls->spotify;

	echo '<p>';
	echo '	<a href="'. $url .'"><img src="'. $album->images[0]->url .'"></a>';
	echo '	<a href="'. $url .'">Vaso Patejdl - '. $name .'</a>';
	echo '</p>';
}
// print_r($json);
// print_r($json2);
foreach ($json->results as $albom){
	$name = $albom->collectionName;
	$url  = $albom->artistViewUrl;

	echo '<p>';
	echo '	<a href="'. $url .'"><img src="'. $albom->artworkUrl100 .'"></a>';
	echo '	<a href="'. $url .'">Vaso Patejdl - '. $name .'</a>';
	echo '</p>';
}


include_once '_inc/footer.php';