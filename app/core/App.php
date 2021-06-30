<?php

class App{
    protected $routes = [];

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

    public function get($path, $collback){
        $this->routes[] = ['GET', $path, $collback];
    }

    public function post($path, $collback){
        $this->routes[] = ['POST', $path, $collback];
    }

    public function run(){
        foreach ($this->routes as $route){
            var_dump($route);
        }

        return call_user_func($this->notFound);


    }
















}

?>