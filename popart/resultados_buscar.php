<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
<title>Resultados de búsqueda</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<section style="width:900px; margin:80px auto;">

<?php

$conexion = mysqli_connect("localhost", "root", "", "BaseDeDatos");

$buscar = $_POST['buscar'];

echo "<h1>Resultados para: <em>" . htmlspecialchars($buscar) . "</em></h1>";

$sql = "SELECT * FROM artistas
        WHERE nombre LIKE '%$buscar%'";

$resultado = mysqli_query($conexion, $sql);

$cantidad = mysqli_num_rows($resultado);

if($cantidad > 0){

    echo "<p>Cantidad de resultados: $cantidad</p>";

    while($fila = mysqli_fetch_assoc($resultado)){

        echo "
        <article style='margin-bottom:20px; padding:20px; border:4px solid black; background:white;'>

            <h2>".$fila['nombre']."</h2>

            <a href='pages/artistas.html'>
                Ir a la página
            </a>

        </article>
        ";
    }

}else{

    echo "<p>No se encontraron resultados.</p>";

}

mysqli_close($conexion);

?>

</section>

</body>
</html>
