<?php

namespace contact\controllers;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

class View{
    private $variables_to_render;

    function __construct()
    {
        $this->variables_to_render = array();
    }

    public function render($titleView){
        require_once ("application/views/header.php");
        foreach ($this->variables_to_render as $item => $value){
            foreach ($value as $key => $val){
                ${$key} = $val;
            }
        }
        $pathViewPerson = "application/views/person/".$titleView.".php";
        $pathViewUser = "application/views/user/".$titleView.".php";
        if (file_exists($pathViewPerson)) {
            require_once ($pathViewPerson);
        }elseif (file_exists($pathViewUser)){
            require_once ($pathViewUser);
        }
        require_once ("application/views/footer.php");
    }

    public function data($keyVariable, $valueVarible){
        $this->variables_to_render[] = array(
            $keyVariable => $valueVarible
        );

    }

}