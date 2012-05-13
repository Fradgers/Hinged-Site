
<?php
class Template {
    protected $template_dir = 'templates/';
    protected $vars = array();
	
    public function __construct($template_dir = null) {
        if ($template_dir !== null) {
            // Check here whether this directory really exists
            $this->template_dir = $template_dir;
        }
    }
	
    public function render($template_file) {
        if (file_exists($this->template_dir.$template_file)) {
            include $this->template_dir.$template_file;
        } else {
            throw new Exception('no template file ' . $template_file . ' present in directory ' . $this->template_dir);
        }
    }
	
    public function __set($name, $value) {
        $this->vars[$name] = $value;
    }
	
    public function __get($name) {
        return $this->vars[$name];
    }
}
?>

<?php

/*function h($string) {
	return htmlspecialchars($string);
}*/

function h($string)
{
    $search = array(chr(145),
                    chr(146),
                    chr(147),
                    chr(148),
                    chr(150),
                    chr(151),
                    chr(133));

    $replace = array("'",
                     "'",
                     '"',
                     '"',
					 '-',
                     '--',
					 '...');

    return str_replace($search, $replace, $string);
} 

?>

<?php

define('FLASH','flash');
define('MP4','video/mp4');
define('OGG','video/ogg');
define('WEBM','video/webm');

class Video {
	public $location;
	public $type;
	
	public function __construct($location, $type) {
        $this->location = $location;
        $this->type = $type;
	}
}

define('VIDEO_LINK','flashonly');
define('VIDEO_FILE','');

class VideoGroup {
	public $videos;
	public $type;
	
	public function __construct($videos, $type) {
		$this->videos = $videos;
		$this->type = $type;
	}
}

?>

<?php

define('VIDEO','video');
define('TEXT','text');
define('IMAGE','image');

define('OTHER','other');

define('NOTREDAME','notredame');
define('SOLOIST','soloist');

define('REHEARSAL','rehearsal');
define('PERFORMANCE','performance');
define('REVIEW','review');
define('TRAILER','trailer');
define('DESCRIPTION','description');

class Content {
    public $title;
	public $summary1;
	public $videogroup;
    public $summary2;
	
	public $show_id;
	public $content_type;
	public $resource_type;
	
	public function __construct($title, $summary1, $videogroup, $summary2, $show_id, $content_type, $resource_type) {
        $this->title = $title;
        $this->summary1 = $summary1;
        $this->videogroup = $videogroup;
        $this->summary2 = $summary2;
        $this->show_id = $show_id;
        $this->content_type = $content_type;
        $this->resource_type = $resource_type;
    }
}
?>

<?php
class Article {
    public $title;
	public $summary;
	public $link;
    public $thumbnail;
	
	public function __construct($title, $summary, $link = '', $thumbnail = '') {
        $this->title = $title;
        $this->summary = $summary;
        $this->link = $link;
        $this->thumbnail = $thumbnail;
    }
}
?>

<?php
class Link {
    public $name;
	public $link;
	public $style_id;
	public $image;
	
	public function __construct($name, $style_id, $link, $image = '') {
        $this->name = $name;
        $this->link = $link;
		$this->style_id = $style_id;
        $this->image = $image;
    }
}
?>