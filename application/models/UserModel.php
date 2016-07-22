<?php
namespace contact\models;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

use contact\helpers\Session;

class UserModel extends Model{
    
    private $query;
    private $table = "user";
    private $login;
    private $password;
    private $repeat_password;
    private $hash;
    private $user_to_create;

    function __construct()
    {
        parent::__construct();
    }

    public function runLogin(){
        $this->login = $_POST['login'];
        $this->password = $_POST['password'];
        $this->query = $this->getLoginQuery();
        $response = $this->runQuery($this->query);
        if(count($response) > 0){
            if(password_verify($this->password, $response[0]['hash'])){
                Session::set("user_id", $response[0]['id']);
            }
            if(!empty(Session::get("user_id"))){
                header("location:../../ContactsController/showContacts/");
            }
        }
    }

    public function runRegister(){
        $this->login = $_POST['login'];
        $this->password = $_POST['password'];
        $this->repeat_password = $_POST['repeat_password'];
        $this->query = $this->getRegisterQuery();
        $response = $this->runQuery($this->query);
        if(!count($response) > 0){
            if($this->password == $this->repeat_password){
                $this->hash = password_hash($this->password, PASSWORD_BCRYPT, array('cost'=>12));
                $this->user_to_create = array("login" => $this->password,
                                        "hash" => $this->hash);
                $this->query = $this->createUserQuery();
                $this->runQuery($this->query);
                header("location:../../UserController/toLogin/");
            }
        }
    }
    
    public function getLoginQuery(){
        $this->queryBuilder->select("*");
        $this->queryBuilder->from($this->table);
        $this->queryBuilder->where(array("login" => $this->login));
        return $this->queryBuilder->createQuery();
    }

    public function getRegisterQuery(){
        $this->queryBuilder->select("*");
        $this->queryBuilder->from($this->table);
        $this->queryBuilder->where(array("login" => $this->login));
        return $this->queryBuilder->createQuery();
    }

    public function createUserQuery(){
        $this->queryBuilder->insert($this->table, $this->user_to_create);
        return $this->queryBuilder->createQuery();
    }

}