<?php

namespace contact\helpers;

if(!defined("PROJECT_ACCESS"))exit("ACCESS DENIED");

class QueryBuilder{

    private $select = " ";
    private $insert = " ";
    private $delete = " ";
    private $update = " ";
    private $from = " ";
    private $where = " ";
    private $limit = " ";


    public function __construct()
    {
        $this->select = "";
        $this->insert = "";
        $this->delete = "";
        $this->update = "";
        $this->from = "";
        $this->where = "";
        $this->limit = "";

    }

    public function select($select){
        $this->select = "SELECT ".$select." ";
        return $this;
    }

    public function insert($table, $insert){
        $columns = "";
        $values = "";
        foreach ($insert as $key => $value){
            $columns .= $key.", ";
            $values .= "'".$value."', ";
        }
        $columns = rtrim($columns, ", ");
        $values = rtrim($values, ", ");
        $this->insert = "INSERT INTO ".$table." "."(".$columns.") "."VALUES(".$values.") ";
        return $this;
    }

    public function delete(){
        $this->delete = "DELETE ";
        return $this;
    }

    public function update($table, $property){
        $property_string = "";
        foreach ($property as $key => $value){
            $property_string .= $key."='".$value."', ";
        }
        $property_string = rtrim($property_string, ", ");
        $this->update = "UPDATE ".$table." SET ".$property_string." ";
        return $this;
    }

    public function from($from){
        $this->from = "FROM ".$from." ";
        return $this;
    }

    public function where($param){
        $columns = "";
        $values = "";
        $property_string = "";
        foreach ($param as $key => $value){
            $columns .= $key."=";
            $values .= "'".$value."', ";
            $property_string .= $columns.$values;
        }
        $property_string = rtrim($property_string, ", ");
        $this->where = "WHERE ".$property_string;
        return $this;
    }

    public function limit($position, $count=""){
        $this->limit = "LIMIT ".$position;
        if($count != ""){
            $this->limit .= ", ".$count;
        }
        return $this;
    }

    public function createQuery(){
        $query = $this->select.$this->insert.$this->delete.$this->update.$this->from.$this->where.$this->limit;
        //echo $query . "<br>";
        $this->select = "";
        $this->insert = "";
        $this->delete = "";
        $this->update = "";
        $this->from = "";
        $this->where = "";
        $this->limit = "";
        return $query;
    }
}

?>