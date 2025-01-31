document.addEventListener("DOMContentLoaded", function() {
  let preloader = document.getElementById("preloader");
  if (preloader) {
      preloader.style.opacity = "0";
      setTimeout(() => {
          preloader.style.display = "none";
      }, 500);
  }
});
