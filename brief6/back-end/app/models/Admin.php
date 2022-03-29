<?php 

class Admin extends DB 
{
    private $table = "client";
    private $conn; 

    public function __construct()
    {
        $this->conn = $this->connect();
        
    }
    
    public function deleteClient($id){
        $query = "DELETE FROM $this->table WHERE idClient = ?";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $stmt->bindParam(1, $id);

        return $stmt->execute();
    } 

    public function updateClient($id,$prenom, $nom, $age, $profession){
        $query = "UPDATE $this->table SET `nom`=':nom',`prenom`=':prenom',`age`=:age,`profession`=':profession' WHERE idClient = :id ";
        $stmt = $this->conn->prepare($query);


        $id = htmlspecialchars(strip_tags($id));
        $prenom = htmlspecialchars(strip_tags($prenom));
        $nom= htmlspecialchars(strip_tags($nom));
        $age = htmlspecialchars(strip_tags($age));
        $profession = htmlspecialchars(strip_tags($profession));
        
        $stmt->bindParam("id", $id);
        $stmt->bindParam("prenom", $prenom);
        $stmt->bindParam("nom", $nom);
        $stmt->bindParam("age", $age);
        $stmt->bindParam("profession", $profession);

        return $stmt->execute();

    }
}