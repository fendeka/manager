<?php

namespace contact\controllers;

use contact\core\Application;
use contact\core\Router;

define("PROJECT_ACCESS", true);

require_once ("application/configs/config.php");
require_once("core/Application.php");


$project = new Application($config);

$router = new Router($config['route']);



?>