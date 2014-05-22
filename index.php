<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Headers: X-Requested-With');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/router_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/encryption_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/log_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/socket_helper.php';


$router = new cp_router_helper();
$encryptionHelper = new cp_encryption_helper();
$logHelper = new cp_log_helper();
$socketHelper = new cp_socket_helper();

//Utilities Controls
$router->add("helper", $encryptionHelper, "verify");
$router->add("helper", $logHelper, "errorLog");
$router->add("socket", $socketHelper, "writeToSocket");

//Enter and handles not found
$router->submit('/home', '/');
?>
