document.addEventListener("DOMContentLoaded", function () {
  var map = L.map('map').setView([49.45972109506029, 2.089253804314794], 15); 

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  L.marker([49.45972109506029, 2.089253804314794]).addTo(map)
      .bindPopup("🏁 Liovette Club Beauvais - D901e")
      .openPopup();
});

// 49.45972109506029, 2.089253804314794