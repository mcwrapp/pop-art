<?php

include("conector.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$verificar = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexion, $verificar);

if (mysqli_num_rows($resultado) > 0) {

    echo "Este correo ya está registrado.";
    exit();

}

$sql = "INSERT INTO usuarios (nombre, email, password)
        VALUES ('$nombre', '$email', '$password')";

if (mysqli_query($conexion, $sql)) {

    header("Location: login.php");
    exit();

} else {

    echo "Error al registrar usuario.";

}

?>