<?php

// parse the URL into the path without a query string
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// separate the path into segments using the / delimiter
$segments = explode('/', $path);

// assign path segments to the $controller and $action variables
$controller = $segments[1];
$action = $segments[2];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();