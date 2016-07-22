<?php

namespace contact\controllers;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

class Controller{

    private $variables_to_render;

    function __construct()
    {
        $this->variables_to_render = array();
     }


    public function loadHelper($titleHelper){
        $pathHelperApp = "application/helpers/".$titleHelper.".php";
        $pathHelperCore = "core/helpers/".$titleHelper.".php";

        if(file_exists($pathHelperApp)){
            require_once ($pathHelperApp);
        }elseif(file_exists($pathHelperCore)){
            require_once ($pathHelperCore);
        }
    }

    public function loadModel($titleModel){
        $pathModel = "application/models/".$titleModel.".php";
        if (file_exists($pathModel)){
            require_once ($pathModel);
            $titleModelInstance = "contact\\models\\".$titleModel;
            $nameModelInstance = new $titleModelInstance();
            return $nameModelInstance;
        }
    }
    
}

?>