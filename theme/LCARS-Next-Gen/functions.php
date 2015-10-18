 <?php
 if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

 function my_function() {
	$text = "some random text";
	return $text;
}

$er = "Error! Danger, Will Robinson!";

function display_sitemap() {
	$sitemaploc = get_site_url();
	$sitemap = $sitemaploc . 'sitemap.xml';
	include $sitemap;
}

?>