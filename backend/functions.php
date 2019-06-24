<?php

require_once "vendor/autoload.php";

// Include router class
include('Route.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Using Medoo namespace
use Medoo\Medoo;

// Initialize
function c() {
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'locfesta',
        'server' => 'png-mysql',
        'username' => 'root',
        'password' => 'tiger'
    ]);
    if ($database) {
        return $database;
    } else {
        return "error";
    }
}

$db = c();

// This function just prints a simple navigation
function navi () {
	?>
	Navigation:
	<ul>
	  <li><a href="./">home</a></li>
	  <li><a href="./index.php">index.php</a></li>
	  <li><a href="./user/3/edit">edit user 3</a></li>
	  <li><a href="./foo/5/bar">foo 5 bar</a></li>
	  <li><a href="./foo/bar/foo/bar">long route example</a></li>
	  <li><a href="./contact-form">contact form</a></li>
	  <li><a href="./get-post-sample">get+post example</a></li>
	  <li><a href="./test.html">test.html</a></li>
	  <li><a href="./aTrailingSlashDoesNotMatters">aTrailingSlashDoesNotMatters</a></li>
	  <li><a href="./aTrailingSlashDoesNotMatters/">aTrailingSlashDoesNotMatters/</a></li>
	  <li><a href="./theCaseDoesNotMatters">theCaseDoesNotMatters</a></li>
	  <li><a href="./thecasedoesnotmatters">thecasedoesnotmatters</a></li>
	  <li><a href="./this-route-is-not-defined">404 Test</a></li>
	  <li><a href="./this-route-is-defined">405 Test</a></li>
	</ul>
	<?php
}