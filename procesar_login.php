<?php

session_start();

include("conector.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 1) {

    $usuario = mysqli_fetch_assoc($resultado);

    if (password_verify($password, $usuario["password"])) {

        $_SESSION["usuario"] = $usuario["nombre"];

        header("Location: index.php");
        exit();

    } else {

        echo "Contraseña incorrecta";

    }

} else {

    echo "Usuario no encontrado";

}

?>