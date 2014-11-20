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

# Grab blades stuff
require __DIR__ . '/app/vendor/autoload.php';
use Philo\Blade\Blade;

# Grab the config file & DB
require( __DIR__ . '/app/config.php');
require( __DIR__ . '/app/database.php');

# Grab all models
foreach (glob( __DIR__ . "/app/model/*.php") as $filename)
{
    require $filename;
}

# Grab all controllers
foreach (glob( __DIR__ . "/app/controller/*.php") as $filename)
{
    require $filename;
}

# Grab the current route
if ( isset($_GET['slug']) ) { $slug = $_GET['slug']; }
if ( isset($_GET['id']) ) { $id = $_GET['id']; } else { $id = NULL; }


# Insantiate the controller (this will be refactored)
$PagesController = new PagesController();
$UserController = new UserController();

# Define the root
if ( !isset($slug) ) { $PagesController->getHome(); }

# Define your roots
elseif ( $slug == 'about' ) { $PagesController->getAbout(); }
elseif ( $slug == 'contact' ) { $PagesController->getContact(); }
elseif ( $slug == 'user' ) { $UserController->getViewUser($id); }
elseif ( $slug == 'users' ) { $UserController->getViewUsers(); }

# If all else fails, return a 404
else {
	http_response_code(404);
	die('404');
}

?>