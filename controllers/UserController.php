<?php
require_once '../dao/UserDao.php';

class UserController {
    private $userDao;

    public function __construct() {
        $this->userDao = new UserDao();
    }

    //fonction qui fait l'authentification par role
    public function authUser() {
        if(isset($_POST)){
            extract(($_POST));
            
            $fullName = htmlspecialchars($fullName);
            $password = htmlspecialchars($password);

            $role = $this->userDao->authUserRole($fullName, $password);
           
            if(!$role){
                echo"Veuillez bien verifier vos donnees ou vous n'avez pas de compte";
            }elseif($role == 'admin'){
                $_SESSION['admin'] = $role;
            }else{
                $_SESSION['casher'] = $role;
            }
            
        }
    }

    public function getUserById($id) {
        $user = $this->userDao->getUserById($id);
        if ($user) {
            // Faire quelque chose avec l'utilisateur (par exemple, l'afficher)
            echo "Id : " . $user->getId() . "<br>";
            echo "Nom Complet : " . $user->getfullName() . "<br>";
            echo "Email : " . $user->getEmail() . "<br>";
            echo "Role : " . $user->getRole() . "<br>";
            echo "Status : " . $user->getState() . "<br>";
        } else {
            echo "Utilisateur non trouvé.";
        }
    }

    // Autres méthodes pour créer, mettre à jour ou supprimer un utilisateur...
    // ...
}

?>
