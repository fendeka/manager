<?php

$config =array();

$config['db']['connect'] = true;
$config['db']['host'] = "localhost";
$config['db']['user'] = "root";
$config['db']['password'] = "1515";
$config['db']['name'] = "manager";
$config['db']['type'] = "mysql";

$config['load']['controllers'] = array('Controller', 'Router', 'View', 'Model', 'Database');

$config['load']['helpers'] = array('QueryBuilder', 'Session');

$config['route'] = array(
    'url' => '/about/',
    'method' => '',
    'run' => '/module/controller/method/param1/param2/param3/',
    'module' => false,
);

define("URL",  "http://mysite.loc/contact/");
error_reporting(E_ALL); // Sets which PHP errors are reported
ini_set('display_errors', 1);// Sets the value of a configuration option

?>
