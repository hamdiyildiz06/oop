<?php

define('APP_DIR', '../app');

require_once "../app/core/MysqliDb.php";
require_once "../app/core/Model.php";
require_once "../app/core/Controller.php";
require_once "../app/core/View.php";
require_once "../app/core/App.php";

function __autoload($class_name){
    $module = explode("Model", $class_name);
    require_once APP_DIR."/modules/{$module[0]}/model/{$class_name}.php";
}


$path   = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$app = new App($path, $method);

$app->get('/default/index', function (){});
$app->get('/default/detail', function (){});
$app->run();