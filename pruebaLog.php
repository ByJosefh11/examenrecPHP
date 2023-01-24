<?php

include __DIR__ . "/vendor/autoload.php";

use Monolog\Handler\FirePHPHandler;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("MiApp");
$log->pushHandler(new StreamHandler("logs/milog.log", Logger::DEBUG));
$log->pushHandler(new FirePHPHandler(Logger::DEBUG)) ;


$log->debug("Esto es un mensaje de DEBUG");
$log->info("Esto es un mensaje de INF");
$log->warning("Esto es un mensaje de WARNING");
$log->error("Esto es un mensaje de ERROR");
$log->critical("Esto es un mensaje de CRITICAL");
$log->alert("Esto es un mensaje de ALERT");



$log->pushHandler(new StreamHandler("php://stderr", Logger::DEBUG));



?>


