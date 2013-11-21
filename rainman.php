
<?php







include_once('database.php');

$page = new Template();

$page->title = 'HINGED - Rainman';
$page->page_id = RAINMAN;

$page->slides = array(
		'resources/images/ACE_TairaFoo_Hinged_Resolution13_020_lowres2.jpg',
'resources/images/ACE_TairaFoo_Hinged_Resolution13_104_lowres.jpg',
	'resources/images/ACE_TairaFoo_Hinged_Resolution13_005_lowres3.jpg',
	'resources/images/5_lowres2.jpg',
	'resources/images/ACE_TairaFoo_Hinged_Resolution13_003(lowres).jpg',
	'resources/images/ACE_TairaFoo_Hinged_Resolution13_004(lowres).jpg',
);

$lookup = new Lookup();
$lookup->key_show_id = $page->page_id;

$page->contents = $lookup->filter($data);

$page->render('show.phtml');

?>
