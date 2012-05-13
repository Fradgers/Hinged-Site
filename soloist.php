
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'HINGED - The Soloist';

$page->links = array(
	new Link('Home', 'home', 'index.php'),
	//new Link('Classes', 'classes', 'classes.html'),
	//new Link('Contact Us', 'contact', 'contact.html'),
	new Link('The Soloist', 'soloist', 'soloist.php'),
	//new Link('Notredame', 'notredame', 'notredame.html'),
);

$page->slides = array(
	'resources/images/dance_photos_3.jpg',
	'resources/images/soloist_still.png'
);

$page->contents = array(
	new Content('Video 1 (youtube)',
				'Accompanying text for the first video.',
				array(
					new Video('http://www.youtube.com/v/wU9XE7o3l7Q?version=3&amp;hl=en_GB', '')
				),
				'flashonly',
				'Summary text for the gfdgfdgfdggfd gfdgdfggdg gfdgfdgfdgf gfirst video.'),
	new Content('Video 2 (embedded)',
				'Accompanying text for the second video.',
				array(
					new Video('http://www.youtube.com/embed/wU9XE7o3l7Q', ''),
					new Video('resources/videos/notredame.ogg', 'video/ogg')
				),
				'',
				'Summary text for the second video.')
);

$page->render('show.phtml');

?>
