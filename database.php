
<?php

include_once('template_lib.php');

class Lookup {
	public $key_show_id = '';
	public $key_resource_type = '';	
	
	public function filter($array) {
		return array_filter($array, array($this,"callback"));
	}
	
	// check for match of specified keys against given content
	protected function callback($content)
	{
		if ($this->key_show_id && ($content->show_id != $this->key_show_id))
			return false;
		
		if ($this->key_resource_type && ($content->resource_type != $this->key_resource_type))
			return false;
			
		return true;
	}
}

$data = array(

	new Content(
		'Promo',
		'New promotional video for The Soloist.',
		new VideoGroup(
			new Video('http://www.youtube.com/v/XMslJ4kmvwc?version=3&amp;hl=en_GB&amp;rel=0',FLASH),
			VIDEO_LINK
		),
		'',
		SOLOIST, VIDEO),
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
		</p>',
		'',
		'',
		SOLOIST, TEXT),
	new Content(
		'Rehearsal video',
		'Header text for the first video.',
		new VideoGroup(
			new Video('http://www.youtube.com/v/wU9XE7o3l7Q?version=3&amp;hl=en_GB&amp;rel=0',FLASH),
			VIDEO_LINK
		),
		'Footer text for the first video.',
		SOLOIST, VIDEO),
	new Content(
		'Review',
		'First review text.',
		'',
		'',
		SOLOIST, TEXT),
	new Content(
		'Review',
		'Second review text.',
		'',
		'',
		SOLOIST, TEXT),
		
	new Content(
		'Teaser Video',
		'Header text for second video.',
		new VideoGroup(
			new Video('http://www.youtube.com/v/DD8nro616hM?version=3&amp;hl=en_GB&amp;rel=0',FLASH),
			VIDEO_LINK
		),
		'',
		SOLOIST, VIDEO),

	new Content(
		'Notredame',
		'Notredame summary text. Notredame summary text. Notredame summary text.
		 Notredame summary text. Notredame summary text. Notredame summary text.
		 Notredame summary text. Notredame summary text.',
		 '',
		 '',
		 NOTREDAME, TEXT),
	new Content(
		'Notredame Teaser Trailer',
		'Header text for the teaser trailer.',
		new VideoGroup(
			array(
				new Video('resources/videos/notredame.mp4',MP4),
				new Video('resources/videos/notredame.webmvp8.webm',WEBM),
				new Video('resources/videos/notredame.ogv',OGG),
			),
			VIDEO_FILE
		),
		'Footer text for the teaser trailer.',
		NOTREDAME, VIDEO)


); // end of data array

?>
