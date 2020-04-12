<?php
namespace thera\config;

use thera\controller\BlogController;

class App
{
    public function run()
    {
        $blog = new BlogController();
        // $this->twig->render('base.html.twig');
        $blog->index();
    }
}