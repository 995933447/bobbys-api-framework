<?php 
require '../vendor/autoload.php';

$app = new \App\Core\Application;

$app->boot();

return $app;