<?php

require('/app/config.php');
// Launcher (Bootstrap) file
// Define routes here

// Use slug from URI, point to relevant controller
// Grab the slug
$slug = $_GET['slug'];

$HomeController = new HomeController();

if ( $slug == 'home' ) { 
	$HomeController->home(); 
}
else {
	header('404');
}

?>