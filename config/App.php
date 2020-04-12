<?php
namespace thera\config;

use thera\controller\Blog;
class App 
{
    public function run()
    {
        $blog = new Blog();
        $blog->index();
    }
}