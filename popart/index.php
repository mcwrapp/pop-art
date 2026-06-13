<?php
session_start();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>POP ART — Home</title>
    <link rel="stylesheet" href="css/style.css" />
  <script src="js/script.js"></script>
  </head>
  <body>

<!-- HEADER -->
<header class="site-header" role="banner">
  <div class="header-inner header-grid">

    <div class="header-actions">

<?php if(isset($_SESSION["usuario"])): ?>

<a href="logout.php" class="usuario-logueado">
  Cerrar sesión
</a>

  <a href="catalogo.php" class="btn-login">
    Catálogo
  </a>

<?php else: ?>

  <a href="login.php" class="btn-login">
    Iniciar sesión
  </a>

<?php endif; ?>

</div>

    <a class="logo" href="index.php" aria-label="Ir a Home">
      <img src="img/logo.png" alt="POP ART" />
    </a>

    <form class="search" action="resultados_buscar.php" method="post" role="search">
      <input type="search" name="buscar" placeholder="Buscar..." aria-label="Buscar" />
      <button type="submit">Buscar</button>
    </form>

  </div>
</header>
   
<!-- Info -->
    <div class="stage">
      <main id="contenido" role="main">
        <section class="banner" aria-label="Portada con obra Pop Art">
          <div class="banner__image" role="img" aria-label="Obra Pop Art"></div>
        </section>

      <p class="home-intro">
«No pienses en hacer arte, simplemente hazlo. Deja que los demás decidan si es bueno o malo, si les gusta o lo odian. Mientras deciden, crea aún más arte.»

— Andy Warhol      </p>

        <section class="home-grid" aria-label="Accesos rápidos a secciones">
          <a class="card card--historia" href="pages/historia.html" aria-label="Historia"></a>
          <a class="card card--artistas" href="pages/artistas.html" aria-label="Artistas"></a>
          <a class="card card--galeria" href="pages/galeria.html" aria-label="Galería"></a>
          <a class="card card--sobre" href="pages/sobre-nosotros.html" aria-label="Sobre nosotros"></a>
          <a class="card card--contacto" href="pages/contacto.html" aria-label="Contacto"></a>
        </section>
      </main>
    </div>

    <!-- FOOTER -->
    <footer class="site-footer" role="contentinfo">
      <div class="footer-inner">
        <div class="footer-left">
          <ul class="socials" aria-label="Redes sociales">
            <li><a class="btn-social" href="#" aria-label="Instagram"><img src="img/insta.jpg" alt="Instagram" /></a></li>
            <li><a class="btn-social" href="#" aria-label="TikTok"><img src="img/twitter.jpg" alt="Twitter" /></a></li>
            <li><a class="btn-social" href="#" aria-label="YouTube"><img src="img/facebook.jpg" alt="Facebook" /></a></li>
          </ul>
          <div class="contactos">
            <a href="mailto:popartoficial@gmail.com">popartoficial@gmail.com</a>
            <a href="tel:+5491180841625">+54 9 11 8084 1625</a>
          </div>
        </div>
        <div class="footer-center">
          <img class="footer-logo" src="img/logo-b.png" alt="POP ART" />
        </div>
        <div class="footer-right">
          <p>© 2026 POP ART — Todos los derechos reservados</p>
          <p><a href="politica-privacidad.html">Política de privacidad y cookies</a> · <a href="terminos.html">Términos</a></p>
        </div>
      </div>
    </footer>

  </body>
</html>