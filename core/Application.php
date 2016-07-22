<?php

namespace contact\core;

use contact\database\Database;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

 class Application{


     function __construct($config)
     {
         $this->setConfig($config);
         $this->loadDefaultControllers();
         $this->loadDefaultHelpers();
         $this->loadDataBase();
     }

     public function setConfig($config){
        $this->config = $config;
     }

     public function loadDefaultHelpers(){
         $helpers = $this->config['load']['helpers'];
         foreach ($helpers as $key => $value) {
             $pathHelperCore = 'core/helpers/' . $value . '.php';
             $pathHelperApplication = 'application/helpers/' . $value . ".php";

             if (file_exists($pathHelperCore)) {
                 //echo $pathHelperCore . "<br>";
                 require_once($pathHelperCore);
             } elseif (file_exists($pathHelperApplication)) {
                 require_once($pathHelperApplication);
             }
         }
     }

     public function loadDefaultControllers(){
         $controllers = $this->config['load']['controllers'];
         foreach ($controllers as $key => $value) {
             $pathControllerCore = 'core/' . $value . '.php';
             $pathControllerApplication = 'application/controllers/' . $value . ".php";

             if (file_exists($pathControllerCore)) {
                 //echo $pathControllerCore. "<br>";
                 require_once($pathControllerCore);
             } elseif (file_exists($pathControllerApplication)) {
                 require_once($pathControllerApplication);
             }
         }

     }
     
     public function loadDataBase(){
         if($this->config['db']['connect']){
             $dbconnection = new Database();
             $dbconnection->setProperties($this->config);
             $GLOBALS['database'] = $dbconnection->initDatabase();
         }
     }
 }