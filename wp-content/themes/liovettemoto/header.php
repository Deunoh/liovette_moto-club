<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Liovette Club Beauvais – Terrain de motocross à Beauvais agréé FFM.">
  <?php wp_head(); ?>
</head>

<div id="preloader">
    <div class="loader"></div>
</div>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <?php echo get_custom_logo(); ?>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title main-title-mobile" id="offcanvasNavbarLabel">Liovette Club Beauvais</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <?php wp_nav_menu([
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'navbar-nav justify-content-center flex-grow-1 pe-3',
            ]) ?>

            <!-- Icône Facebook visible uniquement sur mobile -->
            <a href="https://www.facebook.com/Terraincrossbeauvais/?locale=fr_FR" target="_blank" class="header-facebook d-lg-none">
              <i class="bi bi-facebook fs-1"></i>
            </a>
          </div>
        </div>

        <!-- Icône Facebook visible uniquement sur desktop -->
        <a href="https://www.facebook.com/Terraincrossbeauvais/?locale=fr_FR" target="_blank" class="header-facebook d-none d-lg-inline">
          <i class="bi bi-facebook fs-1"></i>
        </a>

        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>

  <main>