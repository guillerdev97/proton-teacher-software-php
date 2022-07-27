<?php

namespace App;

use PDO;
use PDOException;

class Database
{

    public $mysql;

    public function __construct()
    {
        try {
            $this->mysql = $this->getConnection();
            /*   echo "Connection is available"; */
        } catch (PDOException $ex) {
            echo "Connection has failed: " . $ex->getMessage();
        }
    }

    public function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "teacherschedule";

        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo("mysql:host={$host};dbname={$database};charset{$charset}", $user, $password, $options);

        return $pdo;
    }
}
