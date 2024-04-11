<?php
// 328/pets/index.php
// This is our fat free controller

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoloader
require_once("vendor/autoload.php");

// Instantiate the f3 base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    //echo '<h1>Hello world!</h1>';

    //Render view page.
    $view = new Template();
    echo $view->render("views/home.html");
});

// Run fat free
$f3->run();