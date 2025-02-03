// Ajout automatique du lien sur les images de la gallerie

document.addEventListener('DOMContentLoaded', function() {
    // Target both single images and gallery images
    document.querySelectorAll('.wp-block-image img, .wp-block-gallery img').forEach(function(img) {
        if (!img.parentElement.matches('a')) {
            var link = document.createElement('a');
            link.href = img.src;
            link.className = 'image-link';
            link.target = '_blank';
            link.setAttribute('data-lightbox', 'gallery');
            img.parentNode.insertBefore(link, img);
            link.appendChild(img);
        }
    });
});