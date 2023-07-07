<?php
require_once '../models/User.php';
require_once 'Database.php';

class UserDao {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    //function qui verifier le role d'utilisateur avant de se connecter
     function authUserRole($fullName, $email) {
        $query = "SELECT fullName, email, role FROM user WHERE fullName = :fullName AND email = :email";
        $statement =  $this->conn->prepare($query);
        $statement->bindParam(':fullName', $fullName);
        $statement->bindParam(':email', $email);
        $statement->execute();

        // Vérification du résultat de la requête
        $row_count = $statement->rowCount();
        $resultat = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row_count > 0) {
            return $resultat;
        }else{
            echo "Error data not found";
        }

    }


    //function get All user
    function getAllUser() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM user");
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                return new User($row['id'], $row['fullName'], $row['email'], $row['role'], $row['state']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }



    // function get a user by id 
    function getUserById($id) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM user WHERE id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                return new User($row['id'], $row['fullName'], $row['email'], $row['role'], $row['state']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }

    //Function save user
     function saveUser(User $user){
        $sql = "INSERT INTO your_table_name (fullName, email, role, state) VALUES (:fullName, :email, :role, :state)";
        $stmt =$this->conn->prepare($sql);

        $stmt->bindParam(':fullName', $user->getFullName());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->bindParam(':role', $user->getRole());
        $stmt->bindParam(':state', $user->getState());

        $stmt->execute();
        if($stmt) return $stmt;
    }

     
}
?>
