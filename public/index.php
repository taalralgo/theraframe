<?php
require '../vendor/autoload.php';

use thera\config\App;

$uri = $_SERVER['REQUEST_URI'];

// dd($uri[0]);


$app = new App();

$app->run();