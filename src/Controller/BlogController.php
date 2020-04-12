<?php

namespace thera\controller;

use thera\config\Twig;

/**
 * Class Blog
 */
class BlogController extends Twig
{
    
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