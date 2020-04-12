<?php

namespace thera\controller;

use thera\config\Twig;

class HomeController extends Twig
{
    public function index()
    {
        echo $this->twig->render('home.html.twig');
    }
}