<?php


namespace App\Controllers;


class CheckoutController extends Controller
{
    public function setup()
    {
        $output = [];
        $request=new \App\Lib\Request();
        $output["total"]=$request->post("total");

        return $output;
    }

    public function run()
    {
        $this->render("checkout");
    }
}