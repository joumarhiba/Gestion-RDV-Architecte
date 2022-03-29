<?php

class DB
{
    private $serverName = "localhost";
    private $username = "Amine";
    private $password = "teste123";
    public function connect()
    {
        $database = new PDO("mysql:host=$this->serverName;dbname=architecte", $this->username, $this->password);
        // mysqli_connect(HOST,USER,PASS,DBNAME);

        if($database){
            $this->db = $database;
            return $this->db;  
        } 
        else{
            echo "error";
        }
    }
}