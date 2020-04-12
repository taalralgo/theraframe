<?php

namespace thera\controller;

use thera\config\Twig;

/**
 * Class Blog
 */
class BlogController extends Twig
{

    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @return void
     */
    public function index()
    {
        echo $this->twig->render('base.html.twig',[
            'nom' => 'THERA',
            'prenom' => 'Daouda S.'
        ]);
    }
}