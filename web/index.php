<?php

define('APP_DIR', '../app');

require_once "../app/core/App.php";

$path   = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$app = new App($path, $method);

$app->get('/default/index', function (){});


$app->run();