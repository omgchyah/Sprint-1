<?php
//Guardar datos mientras la sesión siga activa
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

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

//Verificar si guarda datos en la variable $_SESSION

if(isset($_SESSION["username"])) {
    $value = $_SESSION["username"];

    //Mostrar variable
    echo "Valor de 'username' es: " . $value . ".";
} else {
    echo "La variable 'username' no se ha guardado.";
}



?>