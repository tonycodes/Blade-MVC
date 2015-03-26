<?php

/*
|----------------------------------------------------------------------------------------------------------------
| Usage:
|----------------------------------------------------------------------------------------------------------------
| 
| The idea is that we post slugs in the URL, grab them and then use this value 
| to define a controller/function. This then allows you to simply invoke the 
| blade templating engine very simply in the controller function, similar 
| to Laravel in terms of templating. You can also now use Laravel's eloquent 
| ORM to map your models to tables. 
|
*/

// Blade Templating Engine Requirements
require __DIR__ . '/app/vendor/autoload.php';
use Philo\Blade\Blade;

require( __DIR__ . '/app/config.php');
require( __DIR__ . '/app/database.php');

// Fetch all models and controllers
foreach (glob( __DIR__ . "/app/model/*.php") as $filename)
{
    require $filename;
}

foreach (glob( __DIR__ . "/app/controller/*.php") as $filename)
{
    require $filename;
}

// Whats the current page?
if ( isset($_GET['slug']) ) { $slug = $_GET['slug']; }
if ( isset($_GET['id']) ) { $id = $_GET['id']; } else { $id = NULL; }


// Instantiate the controller (this will be refactored)
$PagesController = new PagesController();
$UserController = new UserController();

// Define the site root
if ( !isset($slug) ) { $PagesController->getHome(); }

// Define your routes
elseif ( $slug == 'about' ) { $PagesController->getAbout(); }
elseif ( $slug == 'contact' ) { $PagesController->getContact(); }
elseif ( $slug == 'user' ) { $UserController->getViewUser($id); }
elseif ( $slug == 'users' ) { $UserController->getViewUsers(); }

// Manage routes that are not defined, return a 404
else {
	http_response_code(404);
	die('404');
}

?>