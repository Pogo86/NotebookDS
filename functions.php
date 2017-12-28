<?php
//Get config file
require_once(dirname(__FILE__).'/config.php');

//Output the page title
function the_title(){
	global $title;
	
	echo $title;
}

//Output the page subtitle
function the_subtitle(){
	global $subtitle;
	
	echo $subtitle;
}

//Output the URL
function home_url(){
	echo ABS_URL;
}

//Output the meta description
function the_meta_description(){
	global $metaDescription;
	
	echo $metaDescription;
}
?>