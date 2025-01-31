<body class="bg-gray-100">
  <div class="container mx-auto px-2">
    <!-- Grille d'images -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <!-- Images -->
      <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Image 1" onclick="openLightbox('https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg')">
      </div>
      <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Image 2" onclick="openLightbox('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg')">
      </div>
      <!-- Répète pour les autres images -->
    </div>

    <!-- Lightbox -->
    <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center p-4">
      <div class="relative max-w-4xl w-full">
        <img id="lightbox-img" class="w-full h-auto rounded-lg" src="" alt="Lightbox Image">
        <button onclick="closeLightbox()" class="absolute top-4 right-4 text-white text-2xl bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center hover:bg-gray-700">
          &times;
        </button>
      </div>
    </div>
  </div>

  <script>
    // Fonction pour ouvrir la lightbox
    function openLightbox(imageSrc) {
      const lightbox = document.getElementById('lightbox');
      const lightboxImg = document.getElementById('lightbox-img');
      lightboxImg.src = imageSrc; // Définir l'image à afficher
      lightbox.classList.remove('hidden'); // Afficher la lightbox
    }

    // Fonction pour fermer la lightbox
    function closeLightbox() {
      const lightbox = document.getElementById('lightbox');
      lightbox.classList.add('hidden'); // Masquer la lightbox
    }

    // Fermer la lightbox en cliquant à l'extérieur de l'image
    document.getElementById('lightbox').addEventListener('click', (event) => {
      if (event.target === document.getElementById('lightbox')) {
        closeLightbox();
      }
    });
  </script>
</body>
</html>
