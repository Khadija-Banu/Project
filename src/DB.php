<?php
namespace App;

use PDO;
use PDOException;

class DB{

    public $host = 'localhost';
    public $db_name = 'Attendence';
    public $db_user = 'root';
    public $db_pass = 'khadija203';
    public $pdo;


    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=UTF8";
// var_dump($dsn);
        try {
            $pdoOBJ = new PDO($dsn, $this->db_user, $this->db_pass);

            if ($pdoOBJ) {
                // echo "Connected to the $db database successfully!";
                $this->pdo = $pdoOBJ;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
  


?>