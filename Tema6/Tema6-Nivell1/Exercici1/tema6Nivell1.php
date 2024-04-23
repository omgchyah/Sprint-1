<?php

//EXERCICI 1

//Guardar datos mientras la sesión siga activa
session_start();

//Se verifica que solo se procesa datos usando el método POST usando un "if"
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $mensajeError = "";
    $errorDetectado = false;

    if(empty($_POST["username"])) {
        $mensajeError = "Ingrese usuario.<br>";
        $errorDetectado = true;
    }
    if (empty($_POST["nombre"])) {
        $mensajeError = "Ingrese nombre.<br>";
        $errorDetectado = true;
    }
    if (empty($_POST["apellidos"])) {
        $mensajeError = "Ingrese apellido/s.<br>";
        $errorDetectado = true;
    } //Validad e-mail
    if (empty($_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
        $mensajeError = "Ingrese un e-mail válido.<br>";
        $errorDetectado = true;
    } 
    if (strlen($_POST["password"]) < 8) {
        $mensajeError = "Contraseña deber ser mayor a 8 caracteres.<br>";
        $errorDetectado = true;
    } 

    if ($errorDetectado) {
        echo "Error detectado: " . $mensajeError;
    } else {
    //Recuperar los datos del formulario
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["apellidos"] = $_POST["apellidos"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];

    echo "<h2>Datos del formulario:<h2>";
    echo "<p>Usuario: {$_SESSION["username"]}</p>";
    echo "<p>Nombre: {$_SESSION["nombre"]}</p>";
    echo "<p>Apellidos: {$_SESSION["apellidos"]}</p>";
    echo "<p>E-mail: {$_SESSION["email"]}</p>";
    echo "<p>Contraseña guardada con éxito.</p>";
    }


}

//Verificar si guarda datos en la variable $_SESSION

/*if(isset($_SESSION["username"])) {
    $value = $_SESSION["username"];

    //Mostrar variable
    echo "Valor de 'username' es: " . $value . ".";
} else {
    echo "La variable 'username' no se ha guardado.";
}*/



?>