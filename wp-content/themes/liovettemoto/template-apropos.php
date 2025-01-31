<?php

/**
 * Template Name: A propos
 */
?>

<?php get_header(); ?>
<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1>À Propos du Club</h1>
    <p class="text-white">Découvrez l'histoire de ce circuit familial</p>
  </div>
</section>

<!-- Histoire du club -->
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <h2 class="text-warning">Notre Histoire</h2>
      <p class="text-white">
        Le circuit a été fondé en <strong>1978</strong> par <strong>Élie Delaneuville</strong>, avec l'aide de sa famille et de ses amis. Animé par une passion commune pour le motocross, ils ont travaillé ensemble pour créer un terrain où les pilotes pourraient rouler en toute sécurité et partager leur amour de la discipline.
      </p>
      <p class="text-white">
        En <strong>1983</strong>, le circuit obtient un <strong>agrément ministériel</strong>, reconnaissant officiellement son engagement dans la discipline. Pendant plus de <strong>30 ans</strong>, il évolue sous l'égide de la <strong>fédération UFOLEP</strong> avant d'intégrer la <strong>FFM (Fédération Française de Motocyclisme)</strong>, renforçant ainsi sa place dans le monde du motocross.
      </p>
      <p class="text-white">
        Ces dernières années, la présidence du club a été transmise à son fils, <strong>Jacky Delaneuville</strong>, qui perpétue l’héritage familial avec la même passion et le même engagement. 
      </p>
      <p class="text-white">
        Aujourd’hui, le circuit est avant tout un lieu <strong>familial et convivial</strong>. Il continue de vivre grâce aux <strong>bénévoles</strong> et à la famille Delaneuville, qui s'investissent au quotidien pour offrir aux pilotes un environnement sécurisé et un cadre propice à la pratique du motocross.
      </p>
    </div>
    <div class="col-lg-6">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/circuit.jpg" alt="Circuit de motocross" class="img-fluid rounded shadow">
    </div>
  </div>
</section>


<!-- Image en grand -->
<section>
  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/motos.jpg" alt="Circuit Moto" class="circuit-image">
</section>

<!-- Nos valeurs -->
<section class="values text-center">
  <div class="container">
    <h2 class="text-warning mb-4">Nos Valeurs</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="value-box h-100 d-flex flex-column justify-content-between">
          <h3>🏍 Passion</h3>
          <p>Un circuit à taille humaine où passion, partage et convivialité rassemblent petits et grands, amateurs comme confirmés.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="value-box h-100 d-flex flex-column justify-content-between">
          <h3>🔧 Sécurité</h3>
          <p>Nous mettons tout en place pour respecter les normes en vigueur et améliorer constamment la sécurité sur notre circuit. On remercie nos dirigeants</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="value-box h-100 d-flex flex-column justify-content-between">
          <h3>🤝 Esprit d'équipe</h3>
          <p>Une communauté soudée et dynamique, portée par de nombreux bénévoles passionnés.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>