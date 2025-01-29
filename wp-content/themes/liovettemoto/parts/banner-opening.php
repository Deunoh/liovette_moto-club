<?php
// Afficher la bannière directement dans le HTML
$banner_content = do_shortcode('[open_text]%if_open_now% ✅ Le terrain est <strong>OUVERT</strong> ! %end% %if_closed_now% ❌ Le terrain est <strong>FERMÉ</strong>. %end%[/open_text]');
$class = strpos($banner_content, 'OUVERT') !== false ? 'open' : 'closed';
?>

<div class="opening-banner <?php echo $class; ?>">
    <p class="mb-0"><?php echo $banner_content; ?></p>
</div>
