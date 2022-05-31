<?php

include "../modelo/loginModelo.php";

$userEmail = $_POST['email'];
$password = $_POST['password'];

if (!empty($userEmail) && !empty($password)) {
    $id = connection($userEmail, $password);
    

    if ($id > 0) {


        session_start();
        $_SESSION["user"] = $userEmail;
        $_SESSION["ID"] = $id;


        header("location:../paginas/VisualizarProfesor.html");
    } else {
        header("location:../paginas/login.php");
        die();
    } 
} else {
    
    die();
    header("location:../paginas/login.php"); 
}
