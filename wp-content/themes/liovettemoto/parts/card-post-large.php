<div class="card bg-dark text-white">
  <?php
  $categories = get_the_category();
  if (!empty($categories)) {
    if ($categories[0]->name !== "Non classé") {
      $category_name = $categories[0]->name;
  ?>
      <span class="badge text-bg-<?php echo ($category_name === 'important') ? 'danger' : 'light'; ?>">
        <?php echo esc_html($category_name); ?>
      </span>
  <?php
    }
  }
  ?>
  <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
  <?php else : ?>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/default.png" class="card-img-top" alt="<?php the_title(); ?>">
  <?php endif; ?>
  <div class="card-body">
    <h3 class="card-title"><?php the_title(); ?></h3>
    <div class="card-meta text-secondary mb-2">
      <small>
        Par <?php the_author(); ?> • <?php echo get_the_date('d/m/Y'); ?>
      </small>
    </div>
    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn custom-btn">Lire la suite</a>
  </div>
</div>