<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>POP ART — Catálogo Exclusivo</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body class="page-catalogo">

<header class="site-header">
  <div class="header-inner header-grid">

    <div class="header-actions">
      <span class="usuario-logueado">
        Hola, <?php echo $_SESSION["usuario"]; ?>
      </span>
    </div>

    <a class="logo" href="index.php">
      <img src="img/logo.png" alt="POP ART">
    </a>

    <form class="search" action="resultados_buscar.php" method="post">
      <input type="search" name="buscar" placeholder="Buscar...">
      <button type="submit">Buscar</button>
    </form>

  </div>
</header>

<div class="stage">

<main>

<section class="catalogo-cloud">
  <img src="img/nube6.png" alt="Catálogo">
</section>

<section class="catalogo-bienvenida">
  <h2>💥 Catálogo Exclusivo para Miembros 💥</h2>
</section>

<section class="catalogo-grid">

  <article class="producto rojo">
    <img src="img/catalogo1.jpg" alt="Producto 1">
    <h3>Cuadro Pop Art</h3>
  </article>

  <article class="producto amarillo">
    <img src="img/catalogo2.jpg" alt="Producto 2">
    <h3>Remera Pop Art</h3>
  </article>

  <article class="producto azul">
    <img src="img/catalogo3.jpg" alt="Producto 3">
    <h3>Almohada Pop Art</h3>
  </article>

  <article class="producto verde">
    <img src="img/catalogo4.jpg" alt="Producto 4">
    <h3>Taza Pop Art</h3>
  </article>

</section>

<div class="catalogo-bottomspacer"></div>

</main>

</div>

<footer class="site-footer">
  <div class="footer-inner">

    <div class="footer-left">
      <ul class="socials">
        <li><a class="btn-social" href="#"><img src="img/insta.jpg"></a></li>
        <li><a class="btn-social" href="#"><img src="img/twitter.jpg"></a></li>
        <li><a class="btn-social" href="#"><img src="img/facebook.jpg"></a></li>
      </ul>

      <div class="contactos">
        <a href="mailto:popartoficial@gmail.com">popartoficial@gmail.com</a>
        <a href="tel:+5491180841625">+54 9 11 8084 1625</a>
      </div>
    </div>

    <div class="footer-center">
      <img class="footer-logo" src="img/logo-b.png">
    </div>

    <div class="footer-right">
          <p>© 2026 POP ART — Todos los derechos reservados</p>
          <p><a href="politica-privacidad.html">Política de privacidad y cookies</a> · <a href="terminos.html">Términos</a></p>
        </div>

  </div>
</footer>

<div class="lightbox" id="lightbox">
  <img src="" id="img-ampliada">
</div>

<script src="js/script.js"></script>

</body>
</html>