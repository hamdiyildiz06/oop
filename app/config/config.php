<?php
define('APP_DIR', '../app');
define('CORE', APP_DIR.'/core');
define('CONFIG', APP_DIR.'/config');

//db bağlantı sabitleri
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DBNAME","oop");

ini_set("display_errors", "off");

global $config;
$config = [
  "authentication" => [
      "auth_urls" => [
          "default" => "/default/login"
      ],
      "auth_files" => [
          "default" => "user"
      ]
  ],
  "debug" => "yes"
];

require_once CORE."/MysqliDb.php";
require_once CORE."/Model.php";
require_once CORE."/Controller.php";
require_once CORE."/View.php";
require_once CORE."/App.php";
require_once CONFIG."/routing.php";


//spl_autoload_register(function ($class_name) {
//    include $class_name . '.php';
//});

spl_autoload_register(function ($class_name){

    $module = explode("Model", $class_name);
    if (file_exists($file = APP_DIR."/modules/{$module[0]}/model/{$class_name}.php"))
    require_once $file;

    if (file_exists($file = CORE."/interface/{$class_name}.php"))
    require_once $file;

});

function fatal_handler(){
    global $config;

    $error = error_get_last();
    if ($error != NULL){
        if ($config['debug'] =="yes"){
            var_dump($error);
        }elseif($config['debug'] == "no" && $error['type'] != 8){
            echo "<h3 style='text-align: center; color: red'> Sistemsel HATA !!!</h3>";
        }
    }
}

register_shutdown_function("fatal_handler");