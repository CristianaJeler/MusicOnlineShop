<?php


namespace App\Controllers;


class CartController extends Controller
{
    private $productsModel;
    public function __construct()
    {
        $this->productsModel = new \App\Models\Products();
    }

    public function run(){
        $this->render("cart");
    }

    public function setup()
    {
        $output=[];
        return $output;
    }

    public function get_cart_products()
    {
        $request=new \App\Lib\Request();
        $products=$request->post("cartProducts");
        $result = [];
        if ($products != null){
            foreach ($products as $id=>$quantity) {
                $prod=$this->productsModel->get_by_id(intval($id));
                $prod["quantity"]=$quantity;
                array_push($result,$prod);
            }
        }
        echo json_encode($result);
    }
}