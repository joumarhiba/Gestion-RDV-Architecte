<?php

class Client extends DB
{
    private $table = "client";
    private $conn; 

    public function __construct()
    {
        $this->conn = $this->connect();
        
    }
    public function getAllClients()
    {
        $query = "SELECT reference FROM $this->table ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function addClient($prenom, $nom, $age, $profession, $reference )
    {
        $query = "INSERT INTO $this->table (`prenom`, `nom`, `age`, `profession`, `reference`) VALUES (':prenom', ':nom',:age,':profession', 'reference')";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':age' => $age,
            ':profession' => $profession,
            ':reference' => $reference
        ]);
        return $stmt;
        
    }

    public function getClientById($id)
    {
        echo $id;
    }

}