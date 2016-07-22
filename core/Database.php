<?php
namespace contact\database;

class Database extends \PDO{

    private $host;
    private $user;
    private $password;
    private $name;
    private $type;
    protected $dbconnection;

    function __construct()
    {

    }
    
    public function setProperties($config){
        $this->host = $config['db']['host'];
        $this->user = $config['db']['user'];
        $this->password = $config['db']['password'];
        $this->name = $config['db']['name'];
        $this->type = $config['db']['type'];
    }

    public function initDatabase(){
        $this->dbconnection = new \PDO($this->type.":dbname=".$this->name.";host=".$this->host, $this->user, $this->password);
        return $this->dbconnection;
    }
}
?>
