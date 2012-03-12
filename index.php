<?php
mysql_connect("localhost", "root", "1nqu1s1tor") or die(mysql_error());
mysql_select_db("sitecontent") or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Hinged - Portfolio</title>
	
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta http-equiv="imagetoolbar" content="no" />
	
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	<meta name="author" content="Fradgers" />
	
	<link rel="stylesheet" href="css/master.css">

	<!-- include jQuery library and Cycle slideshow plugin -->
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.cycle.all.latest.js"></script>
	
	<style type="text/css">
#nav {
!float: right;
}

#nav li {
width: 76px;
margin: 5px;
list-style: none;
z-index: 50;
float: left;
}

#nav a {
position: relative;
width: 76px;
padding: 3px;
display: block;
border: 1px solid #ccc;
background: #f2f1df;
z-index: 50;
}

#nav li.activeSlide a {
background: #de6619;
}

#nav a:focus {
outline: none;
}

#nav img {
border: none;
display: block;
}
	</style>
	
	<!-- Cycle slideshow settings -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('.slideshow').cycle({
			fx:     'fadeZoom',
			speed:  4000,
			timeout: 3000,
			pager: '#nav',
			pagerEvent: 'mouseover',
			slideExpr: 'img',
			pause: 1,
			fastOnEvent: true,
			   
			// callback fn that creates a thumbnail to use as pager anchor 
			pagerAnchorBuilder: function(idx, slide) { 
				return '<li><a href="#"><img src="' + slide.src + '" width="76" height="55" /></a></li>'; 
			}
		});
	});
	</script>
</head>

<body class="portfolio">
<div id="page-container">
	<div id="header">
		<!-- Navigation links -->	
		<div class="navigation" id="main_nav">
			<ul>
				<li id="about"><a href="index.html">About</a></li>
				<li id="services"><a href="services.html">Services</a></li>
				<li id="contact"><a href="contact.html">Contact</a></li>
				<li id="portfolio"><a href="portfolio.html">Portfolio</a></li>
			</ul>
		</div>
		
		<!-- Get list of images to use in the slideshow -->
		<div id="slideshow" class="slideshow">
		<?php
			$slides = mysql_query("SELECT ImageFilename FROM images WHERE ShowID='The Soloist'")
				or die(mysql_error());
		
			while($slide = mysql_fetch_array($slides)){
				echo "<img src=\"";
				echo $slide['ImageFilename'];
				echo "\" width=\"760\" height=\"548\"/>";
			}
		?>
		</div>

		<div id="logo">
			<a href="index.html">
			<img src="resources/images/icons/logo.png" width="200" height="75"/>
			</a>
		</div>
	</div>
	
	<div id="content">
		<div class="article transbox">
		<div class="padding">
		<?php
			$sitecontent = mysql_query("SELECT * FROM shows WHERE ShowTitle='The Soloist'")
				or die(mysql_error());
			$pagecontent = mysql_fetch_array($sitecontent);
			echo "\t<h2>";
			echo $pagecontent['ShowTitle'];
			echo "</h2>\n\t\t\t<p>";
			echo $pagecontent['FullText'];
			echo "</p>\n";
		?>
		</div></div>

		<?php
			// Load any relevant video files that are in a format that can be played
			foreach ( range(1,$pagecontent['VideoCount']) as $video_idx ){
			
				$videofiles = mysql_query("SELECT VideoFilename,Format,VideoNo FROM videos WHERE ShowID='Notredame' AND (Format='video/mp4' OR Format='video/ogg') AND VideoNo=$video_idx")
					or die(mysql_error());
	
				// If any video files can be played, add an article div and load the video
				if ($videofile = mysql_fetch_array($videofiles)) {
					echo "\n\t\t<div class=\"article transbox\"><div class=\"padding\">\n";
					echo "\t\t<video width=\"480\" height=\"270\" controls=\"controls\">\n";
					
					do {
						echo "\t\t\t<source src=\"";
						echo $videofile['VideoFilename'];
						echo "\" type=\"";
						echo $videofile['Format'];
						echo "\" />\n";
					} while($videofile = mysql_fetch_array($videofiles));
				
					echo "\t\t\tYour browser does not support the video tag.\n";
					echo "\t\t</video>\n\t\t</div></div>\n";
				}
			}
		?>
	</div>
	
	<div id="footer">
		<div id="altnav">
			-
			<a href="index.html">About</a> -
	        <a href="services.html">Services</a> -
	        <a href="portfolio.html">Portfolio</a> -
	        <a href="contact.html">Contact Us</a> -
		</div>
		Copyright &copy; HINGED
	</div>

</div>
</body>

</html>

