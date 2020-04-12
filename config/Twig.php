<?php

namespace thera\config;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Twig
{
    private $loader;
    public $twig;
    
    public function __construct()
    {
        $this->loader = new FilesystemLoader('../template/');

        $this->twig = new Environment($this->loader);
    }
    
    
}


