<?php

namespace App\Models;
class Products extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_limit($limit)
    {
        $stmt = $this->db->connection->prepare("SELECT * FROM `products` LIMIT ?");
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $results = array();
        $stmt->bind_result($id, $product, $file, $category, $brand, $price, $description, $dimensions, $weight);
        while ($stmt->fetch()) array_push($results, ["id" => $id, "product" => $product,
            "file" => $file, "category" => $category, "brand" => $brand, "price" => $price,
            "description" => $description, "dimensions" => $dimensions, "weight" => $weight]);
        return $results;
    }

    public function get_by_id($id)
    {
        $stmt = $this->db->connection->prepare("SELECT * FROM `products` WHERE `ID`=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($id, $product, $file, $category, $brand, $price, $description, $dimensions, $weight);
        if ($stmt->fetch()) {
            return ["id" => $id, "product" => $product,
                "file" => $file, "category" => $category, "brand" => $brand, "price" => $price,
                "description" => $description, "dimensions" => $dimensions, "weight" => $weight];
        }
        return null;
    }

    public function get_by_category($category)
    {
        $stmt = $this->db->connection->prepare("SELECT * FROM `products` WHERE `category`=?");
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $results = array();
        $stmt->bind_result($id, $product, $file, $category, $brand, $price, $description, $dimensions, $weight);
        while ($stmt->fetch()) array_push($results, ["id" => $id, "product" => $product,
            "file" => $file, "category" => $category, "brand" => $brand, "price" => $price,
            "description" => $description, "dimensions" => $dimensions, "weight" => $weight]);
        return $results;
    }

}