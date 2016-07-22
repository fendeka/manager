<?php

namespace contact\core;


class Router{

    function __construct($config)
    {
        $this->setConfig($config);
        $this->loadController($this->getSegments());
    }

    public function setConfig($config){
        $this->config = $config;
    }

    public function getSegments(){
        $segments =trim($_SERVER['REQUEST_URI'], "/");
        $segments = explode("/",  $segments);
        return $segments;
    }

    public function loadController($controllerData){
        $controllerPath = "application/controllers/".$controllerData[1].".php";
        $controllerTitle  = "contact\\controllers\\".$controllerData[1];
        $controllerMethod = $controllerData[2];

        //print_r($controllerData);
        unset ($controllerData[0]);
        unset ($controllerData[1]);
        unset($controllerData[2]);

        $params = array_values($controllerData);

        if(file_exists($controllerPath)){
            require_once ($controllerPath);
        }
        if (class_exists($controllerTitle) && method_exists($controllerTitle, $controllerMethod)){
            $customController = new $controllerTitle();

            call_user_func_array(array($customController, $controllerMethod), $params);
            return true;
        }
        return false;
    }
}


?>