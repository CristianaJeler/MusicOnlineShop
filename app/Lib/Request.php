<?php


namespace App\Lib;


class Request
{
    public function get($name, $default=null)
    {
        return isset($_GET[$name]) ? $_GET[$name] : $default;
    }
    public function post($name, $default=null)
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }
}