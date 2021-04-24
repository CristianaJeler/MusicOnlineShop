<?php


namespace App\Models;

class Brands extends Model
{

    /**
     * Brands constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $con=$this->db->connection;
        $stmt = $con->prepare("SELECT file_name FROM `brands`");
        if (!$stmt->execute()) die("Eroare!");
        $file = '';
        $stmt->bind_result($file);
        $data = array();
        while ($stmt->fetch()) array_push($data,$file);
        $con->close();
        return $data;
    }
}