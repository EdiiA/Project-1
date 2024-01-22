<?php
class DatabaseConnection{
    
    private $host = "localhost";
    private $username = "vetura";
    // private $password = "1234";
    private $db = "Grande";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            echo "Connection failed "; //per testim
            return null;
        }else{
            echo "Connection successful!"; //per testim
            return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
?>