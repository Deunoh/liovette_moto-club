<?php get_header(); ?>

<section>
  <div class="hero-container">
    <video autoplay muted loop src="<?php echo get_stylesheet_directory_uri() ?>/assets/videos/mainvideo.mp4">
    </video>
    <h1>Liovette Club Beauvais</h1>
  </div>
  <!-- Bannière ouverture du terrain -->
  <?php require_once('parts/banner-opening.php') ?>
  <section class="last-post-section container-fluid py-5">
    <!-- Note d'information sur la licence -->
    <div class="container text-center mb-3">
      <p class="bg-dark text-white py-2 px-3 rounded d-inline-block">
        ℹ️ Une <strong>licence FFM</strong> est obligatoire pour rouler sur le circuit. (Réf. Liovette C3290) <a href="https://www.ffmoto.org/" target="_blank" class="text-warning fw-bold">Obtenez la vôtre ici</a>.
      </p>
    </div>
    <h2 class="text-center mb-4">📰 Les dernières nouvelles</h2>
    <div class="row justify-content-center mx-auto">
      <?php
      // Requête pour les 3 derniers articles avec l'objet wpquery
      $recent_posts = new WP_Query([
        'posts_per_page' => 3,
        'post_status'    => 'publish',
      ]);

      // Boucle pour les articles, si il y en a prendre le premier et le mettre en grand, les autres en petit
      if ($recent_posts->have_posts()) :
        $i = 0;
        while ($recent_posts->have_posts()) : $recent_posts->the_post();
          if ($i === 0) :
      ?>
            <div class="col-12 mb-4">
              <div class="bento-large scroll-appear">
                <?php get_template_part('parts/card', 'post-large'); ?>
              </div>
            </div>
          <?php else : ?>
            <div class="col-12 col-md-6 mb-4">
              <div class="bento-small scroll-appear">
                <?php get_template_part('parts/card', 'post'); ?>
              </div>
            </div>
        <?php
          endif;
          $i++;
        endwhile;
        wp_reset_postdata(); // Important reinitilisé les données
      else :
        ?>
        <p class="text-center">Aucun article trouvé.</p>
      <?php endif; ?>
    </div>

    <!-- Bouton Voir Plus à restylisé -->
    <div class="text-center mt-4">
      <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-secondary">Voir tous les articles</a>
    </div>
  </section>
  <section class="sponsors-section">
    <div id="sponsorCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-around">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/leroy.png" class="sponsor-logo" alt="Leroy">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/images.png" class="sponsor-logo" alt="Sponsor">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/motoandcologo.jpg" class="sponsor-logo" alt="Sponsor">
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-around">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/leroy.png" class="sponsor-logo" alt="Leroy">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/images.png" class="sponsor-logo" alt="Sponsor">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/motoandcologo.jpg" class="sponsor-logo" alt="Sponsor">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-dark text-white" id="gallery">
    <div class="container">
      <h2 class="text-center mb-4">📸 Galerie photo</h2>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <img src="https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto:eco/sitecoremedialibrary/media-library/images/motorcycles/tf450-rc%202025/family%20and%20variant%20page%20images/bikes-my25-motocross-tf-450-rc-770x770.png"
            class="img-fluid rounded shadow scroll-appear" alt="Moto Triumph">

          <img src="https://remeng.rosselcdn.net/sites/default/files/dpistyles_v2/rem_16_9_1124w/2024/03/29/node_584319/14096192/public/2024/03/29/14781012.jpeg?itok=d007smRb1711717320"
            class="img-fluid rounded shadow mt-3 scroll-appear" alt="Moto en action">
        </div>

        <div class="col-lg-4 col-md-6">
          <img src="https://img.redbull.com/images/c_crop,w_4498,h_2249,x_0,y_25/c_auto,w_1200,h_630/f_auto,q_auto/redbullcom/2018/07/05/0c4f7f4e-e133-474e-8881-679c98f2d002/motocross-collection"
            class="img-fluid rounded shadow scroll-appear" alt="Moto RedBull">

          <img src="https://img.pixers.pics/pho_wat(s3:700/FO/53/20/64/06/700_FO53206406_6dacbfd040c5a3511ef5c45e07252453.jpg,700,467,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,417,jpg)/papiers-peints-silhouette-motocross.jpg.jpg"
            class="img-fluid rounded shadow mt-3 scroll-appear" alt="Silhouette Motocross">
        </div>

        <div class="col-lg-4 col-md-6">
          <img src="https://www.r-pur.com/a/blog/media/743919.myshopify.com/Post/featured_img/Motocross.jpg"
            class="img-fluid rounded shadow scroll-appear" alt="Motocross R-Pur">

          <img src="https://s7g10.scene7.com/is/image/ktm/GASGAS-Motocross-2025-medium:Medium?wid=1788&hei=1280&dpr=off"
            class="img-fluid rounded shadow mt-3 scroll-appear" alt="KTM Motocross">
        </div>
      </div>
    </div>
  </section>
  <section id="opening-hours">
    <div class="opening-hours-section py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="mb-4 scroll-appear">⏰ Nos horaires d'ouverture</h2>
            <div class="opening-hours-container d-flex justify-content-center flex-column align-items-center scroll-appear">
              <?php echo do_shortcode('[open class="hours-right closed-italic past-fade" day_format="full_date_month" time_format="24_colon" update=true]'); ?>
              <small class="text-center text-muted mt-3">
                Les entraînements ont lieu le <strong>samedi</strong>, <strong>dimanche</strong> et les <strong>jours fériés</strong>.
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-section py-5 bg-dark text-white" id="contact">
    <div class="container">
      <h2 class="text-center mb-4 scroll-appear">📍 Contactez-nous</h2>
      <p class="text-center mb-5 lead scroll-appear">
        Besoin d’informations sur notre club, les licences ou les tarifs ?
        Contactez-nous directement et nous répondrons à toutes vos questions !
      </p>

      <div class="row align-items-stretch justify-content-center">


        <!-- Informations du président -->
        <div class="col-lg-4 d-flex scroll-appear">
          <div class="contact-info mb-4 mb-lg-0 p-4 rounded shadow bg-secondary d-flex flex-column justify-content-center">
            <h4 class="mb-3">📞 Contact principal</h4>
            <p><strong>Nom :</strong> Delaneuville</p>
            <p><strong>Prénom :</strong> Jacky</p>
            <p><strong>Téléphone :</strong> <a href="tel:+33683028298" class="text-white">06 83 02 82 98</a></p>
          </div>
        </div>
        <!-- Carte interactive -->
        <div class="col-lg-6 d-flex scroll-appear">
          <div id="map" class="rounded shadow flex-grow-1"></div>
        </div>
      </div>
    </div>
  </section>





  <?php get_footer(); ?>