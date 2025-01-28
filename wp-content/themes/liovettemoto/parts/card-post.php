<div class="card bg-dark">
<?php
  $categories = get_the_category();
  if (!empty($categories)) {
      $category_name = $categories[0]->name;
      ?>
      <span class="badge text-bg-light"><?php echo esc_html($category_name); ?></span>
  <?php } ?>
  <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
    <?php else : ?>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/circuit.jpg" class="card-img-top" alt="<?php the_title(); ?>">
  <?php endif; ?>
  <div class="card-body text-light">
    <h5 class="card-title text-light"><?php the_title(); ?></h5>
    <div class="card-meta text-secondary mb-2">
      <small>
        Par <?php the_author(); ?> • <?php echo get_the_date('d/m/Y'); ?>
      </small>
    </div>
    <p class="card-text text-light"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn custom-btn">Lire la suite</a>
  </div>
</div>