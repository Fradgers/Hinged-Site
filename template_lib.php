
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
?>

<?php

define('VIDEO_LINK','flashonly');
define('VIDEO_FILE','');

class Content {
    public $title;
	public $summary1;
	public $videos;
	public $flashonly;
    public $summary2;
	
	public function __construct($title, $summary1, $videos = '', $flashonly = '', $summary2 = '') {
        $this->title = $title;
        $this->summary1 = $summary1;
        $this->videos = $videos;
		$this->flashonly = $flashonly;
        $this->summary2 = $summary2;
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