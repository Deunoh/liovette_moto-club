<?php get_header(); ?>

<div class="container mt-7 mb-4 custom-home">
    <h1 class="text-center mb-5 text-white">Tous les articles</h1>

    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <?php get_template_part('parts/card', 'post'); ?>
                </div>
            <?php endwhile;
        else : ?>
            <p class="text-center">Aucun article trouvé.</p>
        <?php endif; ?>
    </div>

    <!-- Bouton retour à l'accueil -->
    <div class="mt-4 pb-4 text-center">
        <a href="<?php echo home_url('/'); ?>" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle"></i> Retour à l'accueil
        </a>
    </div>
</div>

<?php get_footer(); ?>