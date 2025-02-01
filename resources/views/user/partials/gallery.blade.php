<body class="bg-gray-100">
    <div class="container mx-auto px-2">
        <!-- Grille d'images -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Images -->
            <div>

                <div class="gallery" id="gallery">
                    <!-- Les images seront ajoutées ici par JavaScript -->
                </div>

                <!-- Image Zoomer -->
                <div class="modal" id="modal">
                    <img id="modal-img" src="" alt="Image Agrandie">
                </div>

                <!-- Pagination -->
                <div class="pagination" id="pagination">
                    <button id="prevBtn" disabled>Précédent</button>
                    <button id="nextBtn">Suivant</button>
                </div>


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

        <!-- Script pour les images -->
        <script>
            const images = [
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg",
                "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
            ];

            const imagesPerPage = 8;
            let currentPage = 1;

            function displayImages(page) {
                const gallery = document.getElementById('gallery');
                gallery.innerHTML = '';
                const start = (page - 1) * imagesPerPage;
                const end = start + imagesPerPage;
                const paginatedImages = images.slice(start, end);

                paginatedImages.forEach(src => {
                    const img = document.createElement('img');
                    img.src = src;
                    img.alt = 'Image';
                    img.addEventListener('click', () => {
                        document.getElementById('modal-img').src = src;
                        document.getElementById('modal').style.display = 'flex';
                    });
                    gallery.appendChild(img);
                });

                document.getElementById('prevBtn').disabled = page === 1;
                document.getElementById('nextBtn').disabled = end >= images.length;
            }

            document.getElementById('prevBtn').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    displayImages(currentPage);
                }
            });

            document.getElementById('nextBtn').addEventListener('click', () => {
                if (currentPage * imagesPerPage < images.length) {
                    currentPage++;
                    displayImages(currentPage);
                }
            });

            document.getElementById('modal').addEventListener('click', () => {
                document.getElementById('modal').style.display = 'none';
            });

            // Afficher la première page au chargement
            displayImages(currentPage);
        </script>
</body>

</html>
