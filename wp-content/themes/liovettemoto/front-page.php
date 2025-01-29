<?php get_header(); ?>

<section>
  <div class="hero-container">
    <video autoplay muted loop src="<?php echo get_stylesheet_directory_uri() ?>/assets/videos/mainvideo.mp4">
    </video>
    <h1>Liovette Club Beauvais</h1>
  </div>
</section>
<section class="last-post-section container-fluid py-5">
  <h2 class="text-center mb-4 text-white">Derniers articles</h2>
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
            <div class="bento-large">
              <?php get_template_part('parts/card', 'post-large'); ?>
            </div>
          </div>
        <?php else : ?>
          <div class="col-12 col-md-6 mb-4">
            <div class="bento-small">
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/images.jpg" class="sponsor-logo" alt="Sponsor">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/leroy.png" class="sponsor-logo" alt="Leroy">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/images.png" class="sponsor-logo" alt="Sponsor">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sponsors/images.jpg" class="sponsor-logo" alt="Sponsor">
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>