
<?php

include_once('database.php');

$page = new Template();

$page->title = 'HINGED - The Soloist';
$page->page_id = SOLOIST;

$page->links = array(
	new Link('Home', 'home', 'index.php'),
	//new Link('Classes', 'classes', 'classes.html'),
	//new Link('Contact Us', 'contact', 'contact.html'),
	new Link('The Soloist', 'soloist', 'soloist.php'),
	new Link('Notredame', 'notredame', 'notredame.php'),
	new Link('Videos', 'videos', 'videos.php'),
	new Link('Reviews', 'reviews', ''),
);

$page->slides = array(
	'resources/images/dance_photos_3.jpg',
	'resources/images/sepia1.jpg',
	'resources/images/soloist_still_edit.png',
	'resources/images/sepia2.jpg',
);

$lookup = new Lookup();
$lookup->key_show_id = $page->page_id;

$page->contents = $lookup->filter($data);

$page->render('show.phtml');

?>
