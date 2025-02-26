<div class="container-fluid py-5" id="services">
    <div class="container py-1">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <div class="section-title text-center">
    <div class="badge-wrapper mb-4">
        <span class="custom-badge">NOS SERVICES</span>
    </div>
    <h1 class="main-title">Des solutions personnalisées pour votre entreprise prospère</h1>
    <div class="divider-custom"></div>
</div>  
        </div>
        <div class="row g-5" id="services-container"></div>
    </div>
</div>

<script>
(function() {
    const services = [
        {
            image: '{{ asset("vivicorp/img/Logistique.jpg") }}',
            title: 'Logistique Minière',
            description: 'Victoria offre une logistique minière complète, spécialisée dans le transport, la gestion des stocks et la distribution de matériaux miniers.'
        },
        {
            image: '{{ asset("vivicorp/img/import_Export.jpg") }}',
            title: 'Importation et fourniture des produits pétroliers',
            description: 'Victoria importe et fournit des produits pétroliers de haute qualité pour répondre aux besoins de ses clients.'
        },
        {
            image: '{{ asset("vivicorp/img/Fournitures et services.jpg") }}',
            title: 'Fournitures et services',
            description: 'Victoria s\'appuie sur une expertise solide pour offrir un service de qualité supérieure à ses clients.'
        },
        {
            image: '{{ asset("vivicorp/img/Gestion_des_visas_et_carte.jpg") }}',
            title: 'Gestion des visas et carte de travail',
            description: 'Notre service d\'experts en gestion de visas et cartes de travail pour les expatriés en RDC.'
        },
        {
            image: '{{ asset("vivicorp/img/Facilitation.jpg") }}',
            title: 'Facilitation et intermédiation financière',
            description: 'Notre service d\'experts en finance facilite les transactions financières complexes.'
        },
        {
            image: '{{ asset("vivicorp/img/Consultance.jpg") }}',
            title: 'Consultance et placement',
            description: 'Nous utilisons des méthodes de recherche de pointe pour identifier les meilleurs talents.'
        },
        {
            image: '{{ asset("vivicorp/img/Commerce.jpg") }}',
            title: 'Commerce général',
            description: 'Victoria propose des activités de commerce général avec une large gamme de produits de haute qualité.'
        },
        {
            image: '{{ asset("vivicorp/img/hydrocarbures.jpg") }}',
            title: 'Hydrocarbures',
            description: 'Victoria offre une expertise complète dans le secteur des hydrocarbures.'
        },
        {
            image: '{{ asset("vivicorp/img/sous_traitance.jpg") }}',
            title: 'Sous-traitance dans tous les secteurs',
            description: 'Victoria offre des services de sous-traitance personnalisés dans tous les secteurs.'
        }
    ];

    function createServiceCard(service) {
        const card = document.createElement('div');
        card.className = 'col-lg-4 col-md-6 mb-4';
        card.innerHTML = `
            <div class="service-card">
                <div class="image-wrapper">
                    <div class="skeleton-loading"></div>
                    <img 
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        data-src="${service.image}"
                        alt="${service.title}"
                        class="service-image"
                    >
                </div>
                <div class="card-content">
                    <h4 class="service-title">${service.title}</h4>
                    <p class="service-description">${service.description}</p>
                </div>
            </div>
        `;
        return card;
    }

    function loadServices() {
        const container = document.getElementById('services-container');
        if (!container) return;

        services.forEach((service, index) => {
            const card = createServiceCard(service);
            container.appendChild(card);

            const img = card.querySelector('img');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.onload = () => {
                            img.style.opacity = '1';
                            const skeleton = img.parentElement.querySelector('.skeleton-loading');
                            if (skeleton) skeleton.style.display = 'none';
                        };
                        observer.unobserve(img);
                    }
                });
            });
            observer.observe(img);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadServices);
    } else {
        loadServices();
    }
})();
</script>

<style>
.service-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    height: 100%;
    position: relative;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.image-wrapper {
    position: relative;
    height: 240px;
    overflow: hidden;
    border-radius: 24px 24px 0 0;
}

.service-image {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.service-card:hover .service-image {
    transform: scale(1.05);
}

.skeleton-loading {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        rgba(240,240,240,1) 0%,
        rgba(245,245,245,1) 50%,
        rgba(240,240,240,1) 100%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

.card-content {
    padding: 1.5rem;
    background: white;
    border-radius: 0 0 24px 24px;
}

.service-title {
    color: #2d3436;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    line-height: 1.4;
}

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
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.divider-custom {
    width: 60px;
    height: 4px;
    background: #6C5CE7;
    margin: 0 auto;
    border-radius: 2px;
}

.service-description {
    color: #636e72;
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

@keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .service-card {
        border-radius: 12px;
    }

    .image-wrapper {
        height: 200px;
        border-radius: 12px px 0 0;
    }

    .card-content {
        padding: 1.25rem;
    }

    .service-title {
        font-size: 1.1rem;
    }

    .service-description {
        font-size: 0.9rem;
    }
}

/* Animation d'entrée */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.service-card {
    animation: fadeInUp 0.6s ease-out forwards;
}
</style>