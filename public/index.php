<?php

use Symfony\Component\VarDumper\VarDumper;
use thera\config\App;

require '../vendor/autoload.php';
dump($_SERVER['REQUEST_URI']);

$app = new App();

$app->run();