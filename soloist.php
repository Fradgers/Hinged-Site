
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'HINGED - The Soloist';
$page->page_id = 'soloist';

$page->links = array(
	new Link('Home', 'home', 'index.php'),
	//new Link('Classes', 'classes', 'classes.html'),
	//new Link('Contact Us', 'contact', 'contact.html'),
	new Link('The Soloist', 'soloist', 'soloist.php'),
	new Link('Notredame', 'notredame', 'notredame.php'),
	new Link('Videos', 'video', 'videos.php'),
	new Link('Reviews', 'reviews', ''),
);

$page->slides = array(
	'resources/images/dance_photos_3.jpg',
	'resources/images/soloist_still.png'
);

$page->contents = array(
	new Content(
		'Promo',
		'New promotional video for The Soloist.',
		array(
			new Video('http://www.youtube.com/v/XMslJ4kmvwc?version=3&amp;hl=en_GB',FLASH)
		),
		VIDEO_LINK),
	new Content(
		'The Soloist',
		'<p>
		 On February 14th 2012, HINGED performed <b>The Soloist</b> as part of the Resolution!
		 event at The Place.
		</p><p>
		 The Soloist was performed in a shortened version, telling the story through
		 dance. The choreography used intricate gestures and it moved through the space
		 with a seamless racing energy. The athletic, fast-paced choreography contrasted
		 well with intervals of stillness and moments of weightlessness. The angular movement
		 took the audience from one emotional state to another, through fluid transitions,
		 shifting from the floor to standing within a split second – riveting the audience to
		 both the story and the pure movement phrases of the choreography.
		</p><p>
		 There is a strong sense of honesty in the choreography; although introverted and
		 asymmetrical it creates appropriate emotions and progresses the story through its
		 different scenes. The piece was an abstract telling of the story through dance
		 using subtle gestures to narrate, but also allowing the audience to find their own
		 emotional journey.
		</p>'),
	new Content(
		'Rehearsal video',
		'Header text for the first video.',
		array(
			new Video('http://www.youtube.com/v/wU9XE7o3l7Q?version=3&amp;hl=en_GB',FLASH)
		),
		VIDEO_LINK,
		'Footer text for the first video.'),
	new Content(
		'Review',
		'First review text.'),
	new Content(
		'Review',
		'Second review text.'),
);

$page->render('show.phtml');

?>
