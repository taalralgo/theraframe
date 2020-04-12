<?php
namespace thera\config;

use thera\controller\BlogController;
use thera\controller\ErrorController;
use thera\controller\HomeController;

class App
{
    public function run($uri)
    {

        switch ($uri) {
            // Home uri
            case '/':
                $home = new HomeController();
                $home->index();
                break;

            case '/home':
                $home = new HomeController();
                $home->index();
                break;

                // End Home uri

            case '/blog':
                $blog = new BlogController();
                $blog->index();
                break;
            
            default:
                $error = new ErrorController();
                $error->index();
                break;
        }
    }
}