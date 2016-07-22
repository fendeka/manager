<?php

namespace contact\models;

use contact\helpers\QueryBuilder;
use contact\helpers\Session;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

class Model{
    
    public $database;
    protected $queryBuilder;

    function __construct()
    {
        if(isset($GLOBALS['database'])){
            global $database;
            $this->database = $database;
            $this->queryBuilder = new QueryBuilder();
            Session::init();
        }
    }


    public function runQuery($statement){
        $query = $this->database->prepare($statement);
        $query->execute();
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }
}


?>