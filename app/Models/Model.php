<?php

namespace App\Models;

class Model
{
    protected $db;
    public function __construct()
    {
        try{
            $db = new \App\Database\Database();
            $this->db = $db;
        }catch(\Exception $ex){
            print $ex->getTraceAsString();
        }
    }
}