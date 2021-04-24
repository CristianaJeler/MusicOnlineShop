<?php

namespace App\Controllers;

use http\Header\Parser;

class HomeController extends Controller
{
    private $productsModel;
    private $brandsModel;

    public function __construct()
    {
        $this->productsModel = new \App\Models\Products();
        $this->brandsModel = new \App\Models\Brands();
    }

    public function setup()
    {
        $output = [];
        $output["carouselImages"] = $this->brandsModel->get_all();
        $output["products"] = $this->productsModel->get_all_limit(6);
        return $output;
    }

    public function run()
    {
        return $this->render("home");
    }

    public function get_visited_products()
    {
        $req = new \App\Lib\Request();
        $products= $req->post("visitedProducts");
        $result = [];
        if ($products != null){
            foreach ($products as $prod) {
                array_push($result, $this->productsModel->get_by_id(intval($prod)));
            }
        }
        echo json_encode($result);
    }
}