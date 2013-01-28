
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'HINGED - Classes';
$page->page_id = 'classes';

$page->slides = array(
	'resources/images/dance_photos_3.jpg',
	'resources/images/Pike and a half.jpg',
	'resources/images/IMG_8438.jpg',
	'resources/images/Pike chair.jpg',
	'resources/images/sepia1.jpg',
	'resources/images/IMG_8444.jpg',
	'resources/images/Home end.jpg',
	'resources/images/tairabw_50_edit.jpg',
	'resources/images/E & B hold.jpg',
	'resources/images/IMG_8446.jpg',
	'resources/images/sepia2.jpg',
	'resources/images/Swimming Duet.jpg',
	'resources/images/IMG_8457.jpg',
	'resources/images/TairaPose11.jpg',
	'resources/images/IMG_8469.jpg',
	'resources/images/soloist_still_edit.png',
);

$page->content = new Content(
	'Classes',
	'<p>For CLASSES please call CHOREOGRAPHER: Taira Foo on: <b>07969780063</b> to discuss your personal requirements.</p>
    <p>Or see <a href="http://www.danceworks.net/teachers/taira-foo">Danceworks.net</a> for more details.</p>',
	'',
	'',
	'', DESCRIPTION, TEXT
);

$page->render('basic.phtml');

?>
