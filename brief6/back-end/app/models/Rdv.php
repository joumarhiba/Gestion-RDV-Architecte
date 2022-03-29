<?php 




class Rdv extends DB 
{
    private $table = "rdv";
    private $conn; 

    public function __construct()
    {
        $this->conn = $this->connect();
        
    }

    public function addRdv($sujet, $date, $creneau, $idClient ){
        $query = "INSERT INTO $this->table (`sujet`, `date`, `créneau`, `idClient`) VALUES (':sujet', ':date',':créneau', :idClient)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':sujet' => $sujet,
            ':date' => $date,
            ':créneau' => $creneau,
            ':idClient' => $idClient
        ]);
        return $stmt;   
    }

    public function deleteRdv($id){
        $query = "DELETE FROM $this->table WHERE idRdv = ?";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $stmt->bindParam(1, $id);

        return $stmt->execute();
    } 

    public function updateRdv( $id, $nom, $prenom, $age, $profession , $reference)
    {
        $query = "UPDATE $this->table SET `nom`=':nom',`prenom`=':prenom',`age`=:age,`profession`=':profession',`reference`=':reference' WHERE idRdv = :id";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $nom = htmlspecialchars(strip_tags($nom));
        $prenom = htmlspecialchars(strip_tags($prenom));
        $age = htmlspecialchars(strip_tags($age));
        $profession = htmlspecialchars(strip_tags($profession));
        $reference = htmlspecialchars(strip_tags($reference));


        $stmt->bindParam("id", $id);
        $stmt->bindParam("nom", $nom);
        $stmt->bindParam("prenom", $prenom);
        $stmt->bindParam("age", $age);
        $stmt->bindParam("profession", $profession);
        $stmt->bindParam("reference", $reference);

        return $stmt->execute();
    }



}