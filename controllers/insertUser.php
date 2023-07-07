<?php session_start();
      require_once '../dao/UserDao.php';


$userDao = new UserDao();

if (isset($_POST)) {
 
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $fullName = htmlspecialchars($_POST['role']);
    $email = htmlspecialchars($_POST['state']);

    $role = $_SESSION['role'];
    if($role == 'admin') {
        $userDao->saveUser($fullNam, $email, $role, $state);
    } else {
        echo "vous n'avez pas d'access pour en registrer un nouveau utilisateur";
    }

}

