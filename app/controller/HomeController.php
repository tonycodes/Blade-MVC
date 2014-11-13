<?php

require 'app/vendor/autoload.php';
use Philo\Blade\Blade;

Class HomeController {

	public $views = 'app/view';
    public $cache = 'app/cache';

	// Catch requests from index.php and throw a view with some objects.

	public function home() {
		// Get the home page view
		$blade = new Blade($this->views, $this->cache);
		echo $blade->view()->make('home');
	}
}

?>