
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'HINGED';
$page->page_id = 'home';

$page->slides = array(
	'resources/images/dance_photos_3.jpg',
	'resources/images/IMG_8438.jpg',
	'resources/images/sepia1.jpg',
	'resources/images/IMG_8444.jpg',
	'resources/images/tairabw_50_edit.jpg',
	'resources/images/IMG_8446.jpg',
	'resources/images/sepia2.jpg',
	'resources/images/IMG_8457.jpg',
	'resources/images/TairaPose11.jpg',
	'resources/images/IMG_8469.jpg',
	'resources/images/soloist_still_edit.png',
);

$page->featured = new Content(
	'Featured Video',
	'New promotional video for The Soloist.',
	new VideoGroup(
		new Video('http://www.youtube.com/v/XMslJ4kmvwc?version=3&amp;hl=en_GB&amp;rel=0',FLASH),
		VIDEO_LINK
	),
	'',
	SOLOIST, TRAILER, VIDEO
);

$page->articles = array(
	new Article(
		'Welcome',
		'Our site is currently under construction, but feel free to have a look around!',
		'resources/images/tairabw_100.jpg',
		'resources/images/tairabw_50_edit.jpg'),
	new Article(
		'New Soloist videos',
		'Promos and footage from behind-the-scenes.',
		'videos.php?show=soloist',
		'resources/images/soloist_still_edit.png'),
	new Article(
		'Project teaser',
		'Promo teaser for "Notredame"',
		'notredame.php',
		'resources/images/notredame_still.png'),
);


$page->render('home.phtml');

?>
