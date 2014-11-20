<?php

/*
|-----------------------------------------------------------------------
| Pages Controller
|-----------------------------------------------------------------------
| A demo controller to  demonstrate how easy it is to take routes and 
| generate views accordingly.
|
*/

use Philo\Blade\Blade; # -> Use the blade templating system

Class PagesController {

	public $views = 'app/view';
    public $cache = 'app/cache';

	# -> Catch requests from index.php and throw a view with some objects.
	public function getHome() {
		$blade = new Blade( $this->views, $this->cache ); # -> Sets up the Blade templating engine.
		echo $blade->view()->make( 'home' ); # -> Generates the view.
	}

	public function getAbout() {
		$blade = new Blade( $this->views, $this->cache );
		echo $blade->view()->make( 'about');
	}

	public function getContact() {
		$blade = new Blade( $this->views, $this->cache );
		echo $blade->view()->make( 'contact' );
	}

}

?>