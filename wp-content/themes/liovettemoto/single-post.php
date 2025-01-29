<?php get_header(); ?>

<div class="container mt-7 pb-5 text-white custom-post">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <!-- Image mise en avant en plein écran -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="post-header position-relative">
          <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid w-100" style="height: 400px; object-fit: cover; border-radius: 10px;">
          <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white" style="background: rgba(0, 0, 0, 0.5);">
            <h1 class="fw-bold text-center"><?php the_title(); ?></h1>
          </div>
        </div>
      <?php else : ?>
        <h1 class="fw-bold text-center mt-5"><?php the_title(); ?></h1>
      <?php endif; ?>

      <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
          <!-- Infos post -->
          <div class="text-center text-white small">
            Publié le <?php echo get_the_date(); ?> par
            <strong><?php the_author(); ?></strong>
          </div>

          <!-- Affichage des catégories -->
          <div class="text-center mt-2">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
              foreach ($categories as $category) {
                if ($category->name !== "Non classé") {
                  echo '<span class="badge bg-' . ($category->name === "important" ? "danger" : "primary") . ' me-1">' . esc_html($category->name) . '</span>';
                }
              }
            }
            ?>
          </div>

          <!-- Contenu de l'article -->
          <div class="article-content mt-4 text-justify">
            <?php the_content(); ?>
          </div>

          <!-- Bloc auteur -->
          <div class="author-box d-flex align-items-center bg-light p-3 rounded mt-5 text-dark">
            <div class="author-avatar me-3">
              <?php echo get_avatar(get_the_author_meta('ID'), 60, '', '', ['class' => 'rounded-circle']); ?>
            </div>
            <div>
              <h6 class="mb-0"><?php the_author(); ?></h6>
              <small class="text-muted"><?php echo get_the_author_meta('description'); ?></small>
            </div>
          </div>

          <!-- Navigation entre articles -->
          <div class="container mt-5">
            <div class="row">
              <!-- Article précédent -->
              <div class="mb-3 mb-md-0 col-md-6">
                <?php $prev_post = get_previous_post(); ?>
                <?php if ($prev_post) : ?>
                  <a href="<?php echo get_permalink($prev_post->ID); ?>" class="text-decoration-none">
                    <div class="card bg-light border-0 shadow-sm p-3 d-flex flex-row align-items-center">
                      <i class="bi bi-arrow-left-circle fs-3 text-primary me-3"></i>
                      <div>
                        <span class="text-muted small">Article précédent</span>
                        <h6 class="mb-0"><?php echo get_the_title($prev_post->ID); ?></h6>
                      </div>
                    </div>
                  </a>
                <?php endif; ?>
              </div>

              <!-- Article suivant -->
              <div class="col-md-6 text-end">
                <?php $next_post = get_next_post(); ?>
                <?php if ($next_post) : ?>
                  <a href="<?php echo get_permalink($next_post->ID); ?>" class="text-decoration-none">
                    <div class="card bg-light border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-end">
                      <div class="text-end">
                        <span class="text-muted small">Article suivant</span>
                        <h6 class="mb-0"><?php echo get_the_title($next_post->ID); ?></h6>
                      </div>
                      <i class="bi bi-arrow-right-circle fs-3 text-primary ms-3"></i>
                    </div>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>


          <!-- Bouton retour à l'accueil -->
          <div class="mt-4 text-center">
            <a href="<?php echo home_url('/'); ?>" class="btn btn-secondary">
              <i class="bi bi-arrow-left-circle"></i> Retour à l'accueil
            </a>
          </div>

        </div>
      </div>

  <?php endwhile;
  endif; ?>
</div>
<!-- Section des commentaires -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php if (comments_open() || get_comments_number()) : ?>
                <div class="comments-section bg-dark p-4 rounded text-white">
                    <h3 class="mb-4">💬 Commentaires</h3>
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>