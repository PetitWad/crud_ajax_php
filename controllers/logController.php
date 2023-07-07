<?php
require_once '../dao/UserDao.php';

$userDao = new UserDao();

if (isset($_POST)) {
 
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);

    if(isset($fullName, $email)){
        $userDao->authUserRole($fullName, $email);
    }

    
 
}

