<?php
abstract class db
{

    public $conn;

    function __construct(){
        $this->conn = $this->connect();
    }

    private function connect(){
        include_once "config/config.php";
        $connection = new mysqli (HOST, USERNAME, PASSWORD, DBNAME);
        return $connection;
    }

    public function disconnect($connection){
        $connection->close();
    }

    public function crud($stmt){
        if ($stmt->execute() === TRUE) {
            return 1;
        } else {
            return $this->conn->error;
        }
    }
}
