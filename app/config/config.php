<?php
define('APP_DIR', '../app');
define('CORE', APP_DIR.'/core');
define('CONFIG', APP_DIR.'/config');

//db bağlantı sabitleri
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DBNAME","oop");

require_once CORE."/MysqliDb.php";
require_once CORE."/Model.php";
require_once CORE."/Controller.php";
require_once CORE."/View.php";
require_once CORE."/App.php";
require_once CONFIG."/routing.php";

function __autoload($class_name){
    $module = explode("Model", $class_name);
    require_once APP_DIR."/modules/{$module[0]}/model/{$class_name}.php";
}