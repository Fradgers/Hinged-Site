
<?php

include_once('database.php');

$page = new Template();

$page->title = 'HINGED - All videos';
$page->page_id = 'videos';

$page->slides = array(
	'resources/images/dance_photos_3.jpg',
	'resources/images/sepia1.jpg',
	'resources/images/tairabw_50_edit.jpg',
	'resources/images/sepia2.jpg',
	'resources/images/TairaPose11.jpg',
	'resources/images/soloist_still_edit.png',
);

$lookup = new Lookup();
$lookup->key_show_id = filter_input(INPUT_GET, 'show');
$lookup->key_content_type = filter_input(INPUT_GET, 'type');
$lookup->key_resource_type = VIDEO;

$page->contents = $lookup->filter($data);

$page->render('videos.phtml');

?>
