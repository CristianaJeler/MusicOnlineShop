<?php


namespace App\Controllers;

class Controller
{
    public function setup()
    {
        return array();
    }

    protected function getTemplatePath($name)
    {
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . '.' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'view';
        return realpath($path) . DIRECTORY_SEPARATOR . $name . '.php';
    }

    protected function render($template)
    {
        extract($this->setup());
        return include($this->getTemplatePath($template));
    }

    public function get_all()
    {
        return null;
    }
    public function get_all_limit($limit)
    {
        return null;
    }
}