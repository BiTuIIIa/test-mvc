<?php
session_start();
/*
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
*/


include 'autoload.php';


$router = new \Libs\Router();
$calc = new ($router->getClassName())();
echo $calc-> {$router->getMetodName()}();


?>
