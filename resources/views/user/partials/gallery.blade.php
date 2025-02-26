<div class="container-fluid py-5">
    <div class="container py-5">
        <!-- En-tête stylé -->
        <div class="section-title text-center position-relative pb-3 mb-5">
            <div class="badge-wrapper mb-4">
                <span class="custom-badge">NOTRE GALERIE</span>
            </div>
            <h1 class="main-title">Découvrez nos réalisations</h1>
            <div class="divider-custom"></div>
        </div>

        <!-- Galerie -->
        <div class="gallery" id="gallery"></div>

        <!-- Modal pour zoom -->
        <div class="modal" id="modal">
            <img id="modal-img" src="" alt="Image Agrandie">
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            <button id="prevBtn" class="pagination-btn" disabled>
                <i class="fas fa-chevron-left"></i> Précédent
            </button>
            <button id="nextBtn" class="pagination-btn">
                Suivant <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<style>
/* En-tête stylé */
.badge-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
}

.custom-badge {
    display: inline-block;
    padding: 0.8rem 2rem;
    background: #6C5CE7;
    color: white;
    border-radius: 50px;
    font-weight: 500;
    font-size: 1rem;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(108, 92, 231, 0.2);
}

.main-title {
    color: #2D3436;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.divider-custom {
    width: 60px;
    height: 4px;
    background: #6C5CE7;
    margin: 0 auto;
    border-radius: 2px;
}

/* Gallery Grid */
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.gallery img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.gallery img:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(108, 92, 231, 0.2);
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    z-index: 1000;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.modal img {
    max-width: 90%;
    max-height: 90vh;
    border-radius: 8px;
    cursor: auto;
    animation: zoomIn 0.3s ease;
}

/* Pagination */
.pagination-wrapper {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.pagination-btn {
    padding: 0.8rem 1.5rem;
    background: white;
    border: 2px solid #6C5CE7;
    color: #6C5CE7;
    border-radius: 50px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.pagination-btn:hover:not(:disabled) {
    background: #6C5CE7;
    color: white;
    transform: translateY(-2px);
}

.pagination-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    border-color: #ccc;
    color: #999;
}

/* Animations */
@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .main-title {
        font-size: 2rem;
    }
    
    .custom-badge {
        font-size: 0.9rem;
        padding: 0.7rem 1.8rem;
    }

    .gallery {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 1rem;
    }

    .gallery img {
        height: 150px;
    }

    .pagination-btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
}
</style>

<script>
  <!-- Script pour les images -->
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