<?php
header('Access-Control-Allow-Origin: *');
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/router_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/encryption_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/log_helper.php';


$router = new cp_router_helper();
$encryptionHelper = new cp_encryption_helper();
$logHelper = new cp_log_helper();

//Utilities Controls
$router->add("helper", $encryptionHelper, "verify");
$router->add("helper", $logHelper, "errorLog");

//Enter and handles not found
$router->submit('/home', '/');
?>
