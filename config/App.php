<?php
namespace thera\config;

use thera\controller\BlogController;
use thera\controller\HomeController;

class App
{
    public function run($uri)
    {
        switch ($uri) {
            case '/':
                $home = new HomeController();
                $home->index();
                break;
            
            default:
                # code...
                break;
        }
        if($uri === '/blog')
        {
            $blog = new BlogController();
            $blog->index();
        }
    }
}