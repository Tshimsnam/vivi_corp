<div class="container-fluid py-5" id="features">
    <div class="container">
        <!-- En-tête de section -->
        <div class="section-title text-center position-relative mb-5">
            <div class="badge-wrapper mb-3">
                <span class="custom-badge">Pourquoi Nous Choisir?</span>
            </div>
            <h1 class="mb-0">Nous sommes là pour faire croître votre entreprise</h1>
            <div class="divider-custom"></div>
        </div>

        <!-- Première rangée -->
        <div class="features-row mb-4">
            <!-- Carte 1 -->
            <div class="feature-card" style="--animation-order: 1">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="feature-content">
                    <h3>Fiabilité Garantie</h3>
                    <p>Notre engagement envers l'excellence et la qualité assure une fiabilité constante dans tous nos services.</p>
                </div>
                <div class="hover-indicator"></div>
            </div>

            <!-- Carte 2 -->
            <div class="feature-card" style="--animation-order: 2">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="feature-content">
                    <h3>Équipe Expérimentée</h3>
                    <p>Notre équipe d'experts qualifiés apporte des années d'expérience et de savoir-faire à chaque projet.</p>
                </div>
                <div class="hover-indicator"></div>
            </div>

            <!-- Carte 3 -->
            <div class="feature-card" style="--animation-order: 3">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="feature-content">
                    <h3>Assistance 24h/24 et 7j/7</h3>
                    <p>Notre assistance est disponible 24h/24 et 7j/7 pour répondre à vos besoins en matière de marchés publics, quand vous en avez besoin.</p>
                </div>
                <div class="hover-indicator"></div>
            </div>
        </div>

        <!-- Deuxième rangée -->
        <div class="features-row">
            <!-- Carte 4 -->
            <div class="feature-card" style="--animation-order: 4">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="feature-content">
                    <h3>Solutions Innovantes</h3>
                    <p>Des solutions créatives et modernes adaptées aux défis complexes de votre entreprise.</p>
                </div>
                <div class="hover-indicator"></div>
            </div>

            <!-- Carte 5 -->
            <div class="feature-card" style="--animation-order: 5">
                <div class="feature-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="feature-content">
                    <h3>Partenariat Durable</h3>
                    <p>Construction de relations à long terme basées sur la confiance et le respect mutuel.</p>
                </div>
                <div class="hover-indicator"></div>
            </div>

            <!-- Carte 6 -->
            <div class="feature-card" style="--animation-order: 6">
                <div class="feature-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="feature-content">
                    <h3>Portée Internationale</h3>
                    <p>Une présence globale avec une compréhension des marchés locaux et internationaux.</p>
                </div>
                <div class="hover-indicator"></div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles généraux */
#features {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
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
}

/* Séparateur personnalisé */
.divider-custom {
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, #6366f1, #8b5cf6);
    margin: 2rem auto;
    border-radius: 2px;
}

/* Rangées de caractéristiques */
.features-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 2rem;
}

/* Carte de caractéristique */
.feature-card {
    position: relative;
    background: white;
    border-radius: 24px;
    padding: 2rem;
    transition: all 0.4s ease;
    overflow: hidden;
    height: 100%;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

/* Icône de caractéristique */
.feature-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    color: white;
    font-size: 1.75rem;
    transition: all 0.4s ease;
}

.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
}

/* Contenu de la carte */
.feature-content h3 {
    color: #2d3436;
    font-size: 1.25rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.feature-content p {
    color: #636e72;
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

/* Indicateur de survol */
.hover-indicator {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 4px;
    background: linear-gradient(to right, #6366f1, #8b5cf6);
    transition: width 0.4s ease;
}

.feature-card:hover .hover-indicator {
    width: 100%;
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

.feature-card {
    animation: fadeInUp 0.6s ease-out forwards;
    animation-delay: calc(var(--animation-order) * 0.1s);
}

/* Responsive */
@media (max-width: 992px) {
    .features-row {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .features-row {
        grid-template-columns: 1fr;
    }

    .feature-card {
        padding: 1.5rem;
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}

/* Effet de glassmorphism */
.feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 24px;
    background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.feature-card:hover::before {
    opacity: 1;
}
</style>