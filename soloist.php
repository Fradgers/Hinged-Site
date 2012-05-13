
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
	new Content('Featured Video',
				'New promotional video for The Soloist.',
				array(
					new Video('http://www.youtube.com/v/XMslJ4kmvwc?version=3&amp;hl=en_GB',
							  FLASH)
				),
				VIDEO_LINK),
	new Content('The Soloist',
				'<p>
				 HINGED would like to invite you as our guest, to a performance of <b>The Soloist</b>
				 on the <b>14th February 2012 at 7.30pm</b> at The Place, as part of Resolution!
				</p><p>
				 The Soloist will be performed in a shortened version, telling the story through
				 dance. The choreography uses intricate gestures and it moves through the space
				 with a seamless racing energy. The athletic, fast-paced choreography contrasts
				 well with intervals of stillness and moments of weightlessness. The angular movement
				 takes the audience from one emotional state to another, through fluid transitions,
				 shifting from the floor to standing within a split second – riveting the audience to
				 both the story and the pure movement phrases of the choreography.
				</p><p>
				 There is a strong sense of honesty in the choreography; although introverted and
				 asymmetrical it creates appropriate emotions and progresses the story through its
				 different scenes. The piece will be an abstract telling of the story through dance
				 using subtle gestures to narrate, but also to allow the audience to find their own
				 emotional journey.
				</p><p>
				 <b>Please join us on our debut performance, for further information please contact us
				 on 07969780063.</b>
				</p>'),
	new Content('Video 1',
				'Header text for the first video.',
				array(
					new Video('http://www.youtube.com/v/wU9XE7o3l7Q?version=3&amp;hl=en_GB',
							  FLASH)
				),
				VIDEO_LINK,
				'Footer text for the first video.'),
	new Content('Review',
				'Accompanying text for the first video.'),
	new Content('Review',
				'Accompanying text for the first video.'),
);

$page->render('show.phtml');

?>
