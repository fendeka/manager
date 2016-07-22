<?php
namespace contact\controllers;


use contact\helpers\Session;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");


class UsersController extends Controller{
    
    private $loginInformation;
    private $registerInformation;
   
    function __construct()
    {
        parent::__construct();
        $this->view = new View();
        $this->loginInformation = $this->loadModel("UserModel");

    }

    public function toLogin(){
        $this->view->render("login");
    }

    public function toLogout(){
        Session::destroy();
        $this->view->render("login");
    }

    public function toRegister(){
        $this->view->render("register");
    }

    public function runLogin(){
        $this->loginInformation->runLogin();
        $this->view->render("login");
    }
    
    public function runRegister(){
        $this->registerInformation->runRegister();
        $this->view->render("register");
    }
}

?>
