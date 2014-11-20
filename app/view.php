<?php

class View
{
	function __construct()
	{
		$blade = new Blade( $this->views, $this->cache );
	}
}
	