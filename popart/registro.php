<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section style="width:900px; margin:80px auto;">

<h1>Crear cuenta</h1>

<article style="padding:20px; border:4px solid black; background:white;">

<form action="procesar_registro.php" method="POST">

<p>
<label>Nombre</label><br>
<input type="text" name="nombre" required>
</p>

<p>
<label>Email</label><br>
<input type="email" name="email" required>
</p>

<p>
<label>Contraseña</label><br>
<input type="password" name="password" required>
</p>

<button type="submit">
Registrarse
</button>

</form>

<hr>

<p>
¿Ya tienes cuenta?
<a href="login.php">Iniciar sesión</a>
</p>

</article>

</section>

</body>
</html>