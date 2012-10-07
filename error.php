
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'HINGED - Error';
$page->page_id = 'error';

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

$page->content = new Content(
	'Error',
	'Sorry, the requested page was not found.',
	'',
	'',
	'', DESCRIPTION, TEXT
);

$page->render('basic.phtml');

?>
