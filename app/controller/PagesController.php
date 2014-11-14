<?php

require 'app/vendor/autoload.php';
use Philo\Blade\Blade;

Class PagesController {

	public $views = 'app/view';
    public $cache = 'app/cache';

	// Catch requests from index.php and throw a view with some objects.

	public function getHome() {
		// Get the home page view
		$blade = new Blade($this->views, $this->cache);
		echo $blade->view()->make('home');
	}

	public function getAbout() {
		// Get the home page view
		$blade = new Blade($this->views, $this->cache);
		echo $blade->view()->make('about');
	}

	public function getContact() {
		// Get the home page view
		$blade = new Blade($this->views, $this->cache);
		echo $blade->view()->make('contact');
	}
}

?>