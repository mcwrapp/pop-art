<?php

$conexion = mysqli_connect("localhost", "root", "", "BaseDeDatos");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, email, asunto, mensaje)
VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

mysqli_query($conexion, $sql);

?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Mensaje enviado</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section style="width:900px; margin:80px auto;">

<div style="
background:white;
border:5px solid black;
padding:40px;
text-align:center;
">

<h1>¡Mensaje enviado!</h1>

<p>
Gracias <strong><?php echo htmlspecialchars($nombre); ?></strong>,
tu mensaje fue enviado correctamente.
</p>

<br>

<a href="index.php" class="btn-login">
Volver al inicio
</a>

</div>

</section>

</body>
</html>