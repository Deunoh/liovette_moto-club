<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
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
        <!-- <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Histoire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Contact</a>
          </li>
        </ul> -->
      
      </div>
    </div>
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<main>