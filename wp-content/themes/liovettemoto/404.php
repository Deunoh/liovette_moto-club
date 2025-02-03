<?php get_header(); ?>

<div class="error-404-container">
  <div class="error-content text-center">
    <h1 class="error-title">404</h1>
    <h2>Oups ! On dirait que vous avez fait un saut dans le vide !</h2>
    
    <div class="moto-animation">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.webp" alt="Moto Jump" 
         class="moto-404">
    </div>
    
    <p>Cette piste n'existe pas ou a été déplacée.</p>
    
    <div class="error-actions">
      <a href="<?php echo home_url(); ?>" class="btn btn-primary">
        Retour à la piste principale
      </a>
    </div>
  </div>
</div>

<style>
.error-404-container {
  padding: 8rem 0 0 0;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
}

.error-title {
  font-size: 120px;
  font-weight: bold;
  color: #ff3300;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.moto-animation {
  margin: 40px 0;
}

.moto-404 {
  max-width: 300px;
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

.error-actions {
  margin-top: 30px;
  margin-bottom: 2rem;
}

.btn-primary {
  background-color: #ff3300;
  border: none;
  padding: 10px 20px;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.btn-primary:hover {
  background-color: #cc2900;
}
</style>

<?php get_footer(); ?>