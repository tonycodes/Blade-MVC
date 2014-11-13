<?php

#########
#
# This is a small project im working on, if anyone finds it useful feel free to use and contribute to it.
# Usage:
# The idea is that we post slugs in the URL, grab them and then use this value to define a controller/function. 
# This then allows you to simply invoke the blade templating engine very simply in the controller function, similar 
# to Laravel in terms of templating. 
#
#########

# Grab the config file
require('/app/config.php');

# Grab the current route
$slug = $_GET['slug'];
echo $slug;

# Insantiate the controller (this will be refactored)
$HomeController = new HomeController();

# Define some routes
if ( $slug == 'home' ) { $HomeController->home(); }

# If all else fails, return a 404
else {
	http_response_code(404);
}

?>