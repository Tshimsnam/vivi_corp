<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <!-- En-tête stylé -->
                <div class="section-title text-center position-relative pb-3 mb-5">
                    <div class="badge-wrapper mb-3">
                        <span class="custom-badge">QUI SOMMES-NOUS?
                        
                    </span>
                    </div>
                    <h1 class="mb-4">Victoria Corporation</h1>
                    <div class="divider-custom"></div>
                </div>

                <!-- Contenu principal -->
                <div class="about-content">
                    <!-- Cartes d'information -->
                    <div class="info-cards-grid">
                        <div class="info-card">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Notre Mission</h3>
                            <p>Fournir des solutions innovantes et des services de qualité supérieure à nos clients tout en maintenant les plus hauts standards d'excellence.</p>
                        </div>

                        <div class="info-card">
                            <div class="card-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>Notre Vision</h3>
                            <p>Devenir le leader incontesté dans notre secteur en Afrique, reconnu pour notre excellence, notre innovation et notre engagement envers nos clients.</p>
                        </div>

                        <div class="info-card">
                            <div class="card-icon">
                                <i class="fas fa-gem"></i>
                            </div>
                            <h3>Nos Valeurs</h3>
                            <p>Excellence, intégrité, transparence, innovation et engagement envers nos clients sont les piliers de notre réussite.</p>
                        </div>
                    </div>

                    <!-- Description principale -->
                    <div class="main-description">
                        <p class="text-justify mb-4">
                            Victoria Corporation est une entreprise leader spécialisée dans divers secteurs d'activités. 
                            Notre expertise s'étend de la logistique minière à la gestion des produits pétroliers, 
                            en passant par le commerce général et la consultance.
                        </p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles généraux */
.about-content {
    background: white;
    border-radius: 30px;
    padding: 3rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
}

/* Badge personnalisé */
.custom-badge {
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 500;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 1rem;
}

/* Séparateur personnalisé */
.divider-custom {
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, #6366f1, #8b5cf6);
    margin: 2rem auto;
    border-radius: 2px;
}

/* Grille de cartes d'information */
.info-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.info-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.card-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 1.5rem;
}

.info-card h3 {
    color: #2d3436;
    font-size: 1.25rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.info-card p {
    color: #636e72;
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

/* Description principale */
.main-description {
    max-width: 800px;
    margin: 0 auto 3rem;
    text-align: center;
    color: #636e72;
    line-height: 1.8;
}

/* Statistiques */
.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
    padding-top: 3rem;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 0.5rem;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.stat-label {
    color: #636e72;
    font-size: 1rem;
}

/* Animations */
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

.info-card, .stat-item {
    animation: fadeInUp 0.6s ease-out forwards;
}

/* Responsive */
@media (max-width: 768px) {
    .about-content {
        padding: 2rem;
        border-radius: 20px;
    }

    .info-cards-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .stats-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .stat-number {
        font-size: 2rem;
    }
}
</style>