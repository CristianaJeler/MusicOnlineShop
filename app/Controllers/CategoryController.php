<?php


namespace App\Controllers;


class CategoryController extends Controller
{
    private $productsModel;
    private $category;

    public function __construct()
    {
        $request=new \App\Lib\Request();
        $this->category=$request->get("category");
        $this->productsModel=new \App\Models\Products();
    }

    public function run(){
        return $this->render("category");
    }

    public function setup()
    {
        $output=[];
        $output["currentCategory"]=$this->category;
        $output["categoryProducts"]=$this->productsModel->get_by_category($this->category);
        return $output;
    }

}