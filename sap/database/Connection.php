<?php
class Connection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "1234";
    private $database = "shipping";
    private $conn;
    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    function getConnection(){
        return $this->conn;
    }
    function Close(){
        $conn = null;
    }
}
