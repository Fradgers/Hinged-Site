
<?php

include_once('database.php');

$page = new Template();

$page->title = 'HINGED - The Soloist';
$page->page_id = SOLOIST;


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

$lookup = new Lookup();
$lookup->key_show_id = $page->page_id;

// return all results for page_id, except for reviews
$lookup->key_content_type = REVIEW;
$lookup->content_type_invert_results = true;

$page->contents = $lookup->filter($data);

$page->render('show.phtml');

?>
