<?php


namespace App\Controllers;

class ContactController extends Controller
{
    public function setup()
    {
        $output=[];
        return $output;
    }

    public function run()
    {
        return $this->render("contact");
    }
}