<?php

namespace thera\controller;

use thera\config\Twig;

class ErrorController extends Twig
{
    public function index()
    {
        echo $this->twig->render('error/index.html.twig');
    }
}