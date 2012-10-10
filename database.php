
<?php

include_once('template_lib.php');


/**
 * Returns the url query as associative array
 *
 * @param    string    query
 * @return    array    params
 */
function convert_url_query($query) {
    $query_parts = explode('&', $query);
   
    $params = array();
    foreach ($query_parts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
   
    return $params;
}


class Lookup {
	public $key_show_id = '';
	
	public $key_content_type = '';
	public $content_type_invert_results = false;
	
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
			
		if ($this->key_content_type)
		{
			if ($content->content_type != $this->key_content_type)
			{
				if (!$this->content_type_invert_results)
					return false;
			}
			else
			{
				if ($this->content_type_invert_results)
					return false;
			}
		}
			
		return true;
	}
	
	/*
		// check for match of specified keys against given content
		protected function callback($content)
		{
			if ($this->key_show_id && ($content->show_id != $this->key_show_id))
				return false;
			
			if ($this->key_resource_type && ($content->resource_type != $this->key_resource_type))
				return false;
				
			if ($this->key_content_type && ($content->content_type != $this->key_content_type))
				return false;
				
			return true;
		}
	*/
	
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
		SOLOIST, TRAILER, VIDEO),

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
		 shifting from the floor to standing within a split second &ndash; riveting the audience to
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
		SOLOIST, DESCRIPTION, TEXT),
		
	new Content(
		'Review',
		'<p>Hinged is a new contemporary dance company recently formed whose aim is to deliver a
		 story through dance. Choreographer, Taira Foo emphasises "we want our performances to be
		 filmic, so that we can really take the audience on an emotional journey".</p>
		 <p>Three Danceworks staff were lucky enough to go on that journey this week at The Place
		 for their piece &ndash; The Soloist. We left the theatre having been fully involved in a heart-wrenching
		 story based on the movie.</p>
		 <p>"The performance of the Soloist was transporting me into Julliard&#39;s world and its emotional
		 fragility and existence was as if in another universe" felt Cherine.</p>
		 <p>Though constrained by a running time of 25 minutes, the twelve dancers performing in
		 The Soloist, including our own Sara Dos Santos, did an astonishing job, and with 9 pieces
		 to learn in two weeks, with rarely a stop or breath between the numbers. But, according to
		 Taira, Hinged is a very "physical company".</p>
		 <p>Each dancer was very different which really adds to the piece &ndash; all individuals each with
		 their own story. Altogether, it makes The Soloist an impressive performance, which touched
		 the audience&#39;s heart.</p>',
		'',
		'',
		SOLOIST, REVIEW, TEXT),
		
	new Content(
		'Teaser Video',
		'Preview of The Soloist',
		new VideoGroup(
			new Video('http://www.youtube.com/v/DD8nro616hM?version=3&amp;hl=en_GB&amp;rel=0',FLASH),
			VIDEO_LINK
		),
		'',
		SOLOIST, TRAILER, VIDEO),

	new Content(
		'Review',
		'<p>The final work of the evening, HINGED&#39;s The Soloist, was without doubt the most complete
		 group performance of my Resolution! experience. Performed by choreographer Taira Foo&#39;s mammoth
		 cast of twelve dancers, this narrative work was attacked with dynamism and crisp precision.</p>
		 <p>Power relationships flit back and forth as the protagonist, a violin player, seemingly
		 conducts the chorus&#39; every move through the swish of his bow and ripple of his body. The
		 performance was textured, complex, chaotic, pulsing, thrusting, bubbling and explosive&hellip; but
		 with so much going on it did become rather brain frazzling!</p>',
		'',
		'',
		SOLOIST, REVIEW, TEXT),
	
	new Content(
		'Rehearsal video',
		'Rehearsals for The Soloist',
		new VideoGroup(
			new Video('http://www.youtube.com/v/wU9XE7o3l7Q?version=3&amp;hl=en_GB&amp;rel=0',FLASH),
			VIDEO_LINK
		),
		'',
		SOLOIST, REHEARSAL, VIDEO),

	new Content(
		'Notredame',
		'',
		'',
		'',
		NOTREDAME, DESCRIPTION, TEXT),
		 
	new Content(
		'Teaser Trailer',
		'Teaser video for the Notredame project.',
		new VideoGroup(
			array(
				new Video('resources/videos/notredame.mp4',MP4),
				new Video('resources/videos/notredame.webmvp8.webm',WEBM),
				new Video('resources/videos/notredame.ogv',OGG),
			),
			VIDEO_FILE
		),
		'',
		NOTREDAME, TRAILER, VIDEO)

); // end of data array

?>
