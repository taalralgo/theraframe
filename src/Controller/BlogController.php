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
        echo $this->twig->render('blog/index.html.twig',[
            'nom' => 'THERA',
            'prenom' => 'Daouda S.'
        ]);
    }
}