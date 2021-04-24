<?php

namespace App\Controllers;

class SpecificProductController extends Controller
{
    private $productsModel;
    private $currentProduct;

    public function __construct()
    {
        $this->productsModel = new \App\Models\Products();
        $request = new \App\Lib\Request();
        $productId = $request->get('product');
        $this->currentProduct = $this->get_current_product($productId);
    }

    private function get_current_product($id)
    {
        return $this->productsModel->get_by_id($id);
    }

    public function run()
    {
        return $this->render("specificproduct");
    }

    public function setup()
    {
        $output = [];
        $output["productDetails"] = $this->currentProduct;
        return $output;
    }
}