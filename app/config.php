<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

$views = __DIR__ . '/view';
$cache = __DIR__ . '/cache';

// Debugging
error_reporting(E_ALL);

// Include controllers
foreach (glob( __DIR__ . "/controller/*.php") as $filename)
{
    require $filename;
}

// Define config options here

?>