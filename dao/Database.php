<?php
class Database {
    private $host = "localhost"; 
    private $username = "root"; 
    private $password = "";  
    private $dbname = "challenge2_atalou"; 

    public function connect() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
            return null;
        }
    }
}
?>
