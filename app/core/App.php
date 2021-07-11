<?php

class App{
    protected static $routes = [];

    protected $activePath;

    protected $activeMethod;

    protected $notFound;

    public function __construct($activePath, $activeMethod)
    {
        $this->activePath = $activePath;
        $this->activeMethod = $activeMethod;

        $this->notFound = function (){
            http_response_code(404);
            echo "404 not fount";
        };
    }

    public static function get($path, $callback = null){
        self::$routes[] = ['GET', $path, $callback];
    }

    public static function post($path, $callback = null){
        self::$routes[] = ['POST', $path, $callback];
    }

    public function run(){

        foreach (self::$routes as $route){

            list($method, $path, $params) = $route;
            $methodCheck = $this->activeMethod == $method;
            $pathCheck   = preg_match("~^{$path}$~", $this->activePath, $params);

            if ($methodCheck && $pathCheck){

                 $url = explode("/", $path);

                 if (count($url) == 2){
                     $module = "default";
                     $controller = "defaultController";
                     $action     = "indexAction";
                 }else{
                     $module = $url[1];
                     $controller = $url[1]."Controller";
                     $action     = $url[2]."Action";
                 }

                 if (file_exists($file = APP_DIR."/modules/{$module}/controller/{$controller}.php")){
                     require_once $file;

                     if (class_exists($controller)){
                         $class = new $controller;

                         if (method_exists($class, $action)){
                             array_shift($params);
                             return call_user_func_array([$class,$action], array_values($params));
                         }else{
                             echo "<br>Method mevcut değil<br>";
                         }

                     }else{
                         echo "<br>Sınıf mevcut değil<br>";
                     }
                 }else{
                     echo "<br>Controller mevcut değil<br>";
                 }

                var_dump($route);
            }

        }

        return call_user_func($this->notFound);

    }
















}

?>