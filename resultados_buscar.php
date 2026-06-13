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

$buscar = strtolower($_POST['buscar']);

echo "<h1>Resultados para: <em>$buscar</em></h1>";

$resultados = [];


if (
    str_contains($buscar, 'warhol') ||
    str_contains($buscar, 'andy')
) {
    $resultados[] = [
        "titulo" => "Andy Warhol",
        "link" => "pages/artistas.html"
    ];
}

if (
    str_contains($buscar, 'lichtenstein') ||
    str_contains($buscar, 'roy')
) {
    $resultados[] = [
        "titulo" => "Roy Lichtenstein",
        "link" => "pages/artistas.html"
    ];
}

if (
    str_contains($buscar, 'richard') ||
    str_contains($buscar, 'hamilton')
) {
    $resultados[] = [
        "titulo" => "Richard Hamilton",
        "link" => "pages/artistas.html"
    ];
}


if (count($resultados) > 0) {

    echo "<p>Cantidad de resultados: ".count($resultados)."</p>";

    foreach($resultados as $resultado){

        echo "
        <article style='margin-bottom:20px; padding:20px; border:4px solid black; background:white;'>

            <h2>".$resultado['titulo']."</h2>

            <a href='".$resultado['link']."'>
                Ir a la página
            </a>

        </article>
        ";
    }

} else {

    echo "<p>No se encontraron resultados.</p>";

}

?>

</section>

</body>
</html>