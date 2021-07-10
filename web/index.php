<?php
require_once  "../app/config/config.php";

$path   = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$app = new App($path, $method);
$app->run();