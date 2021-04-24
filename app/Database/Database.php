<?php
namespace App\Database;

class Database
{
    const USER = "root";
    const PASS = "";
    const HOST = "localhost";
    const DB   = "music";

    public $connection;

    public function __construct() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db   = self::DB;
        $this->connection= new \mysqli($host, $user, $pass, $db);
        if($this->connection->connect_error)
            throw new \Exception("Connection to DB failed!");
    }

    public static function getConnection() {
        $connection=new static();
        return $connection->connection;
    }
}