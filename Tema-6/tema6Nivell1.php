<?php
//Guardar datos mientras la sesión siga activa
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //Recuperar los datos del formulario
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["apellido"] = $_POST["apellidos"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
}


?>