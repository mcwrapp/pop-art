<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
<title>Iniciar sesión</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section style="width:900px; margin:80px auto;">

<h1>Iniciar sesión</h1>

<article style="padding:20px; border:4px solid black; background:white;">

<form action="procesar_login.php" method="POST">

<p>
<label>Email</label><br>
<input type="email" name="email" required>
</p>

<p>
<label>Contraseña</label><br>
<input type="password" name="password" required>
</p>

<button type="submit">
Ingresar
</button>

</form>

<hr>

<p>
¿No tienes cuenta?
<a href="registro.php">Registrarse</a>
</p>

</article>

</section>

</body>
</html>