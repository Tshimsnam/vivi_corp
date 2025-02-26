<!-- Footer Start -->
<div class="modern-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Logo Section -->
            <div class="footer-brand">
                <a href="{{route('index')}}">
                    <img src="{{asset('vivicorp/img/logo2prime.png')}}" alt="Logo" class="footer-logo">
                </a>
            </div>

            <!-- Contact Section -->
            <div class="footer-section">
                <h3>Contact</h3>
                <div class="contact-list">  
                    <div class="contact-item">
                    <i class="fa fa-map-marker-alt"></i>
                    <span>08, Avenue du commerce/Gombe</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <span>N°303, Lac Kipopo, C/Lubumbashi, Haut-Katanga</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>Info@vivicorp.net</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+243 997432310 / 847447674</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h3>Navigation</h3>
                <div class="footer-links">
                    <a href="{{route('index')}}">Accueil</a>
                    <a href="{{route('apropos')}}">À propos</a>
                    <a href="{{route('services')}}">Services</a>
                </div>
            </div>

            <!-- Social Media -->
            <div class="footer-section">
                <h3>Suivez-nous</h3>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; {{date('Y')}} Victoria Corporation • Tous droits réservés • Designed by <a href="">TshimsDev</a></p>
        </div>
    </div>
</div>

<style>
.modern-footer {
    background: #2A2B32;
    color: #fff;
    padding: 40px 0 20px; /* Réduit de 80px à 40px */
}

/* Content Layout */
.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Réduit de 250px à 200px */
    gap: 30px; /* Réduit de 40px à 30px */
    margin-bottom: 30px; /* Réduit de 50px à 30px */
}

/* Logo Styling */
.footer-logo {
    max-width: 150px; /* Réduit de 180px à 150px */
    height: auto;
}

/* Section Headers */
.footer-section h3 {
    color: #FF6B6B;
    font-size: 1.1rem; /* Réduit de 1.25rem */
    margin-bottom: 1rem; /* Réduit de 1.5rem */
    position: relative;
    padding-bottom: 0.5rem;
}

.footer-section h3::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 25px; /* Réduit de 30px */
    height: 2px; /* Réduit de 3px */
    background: #FF6B6B;
    border-radius: 2px;
}

/* Contact List */
.contact-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem; /* Réduit de 1rem */
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 10px; /* Réduit de 12px */
    font-size: 0.9rem; /* Ajout d'une taille de police réduite */
}

.contact-item i {
    color: #FF6B6B;
    font-size: 1rem; /* Réduit de 1.1rem */
}

/* Links Styling */
.footer-links {
    display: flex;
    flex-direction: column;
    gap: 0.6rem; /* Réduit de 0.8rem */
}

.footer-links a {
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    width: fit-content;
    font-size: 0.9rem; /* Ajout d'une taille de police réduite */
}

/* Social Media */
.social-links {
    display: flex;
    gap: 12px; /* Réduit de 15px */
}

.social-btn {
    width: 35px; /* Réduit de 40px */
    height: 35px; /* Réduit de 40px */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    background: rgba(255, 107, 107, 0.1);
    font-size: 0.9rem; /* Ajout d'une taille de police réduite */
}

/* Copyright Section */
.footer-bottom {
    padding-top: 15px; /* Réduit de 20px */
    border-top: 1px solid rgba(255,255,255,0.1);
    text-align: center;
    font-size: 0.85rem; /* Réduit de 0.9rem */
}

.footer-bottom p {
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .modern-footer {
        padding: 30px 0 15px; /* Réduit de 60px à 30px */
    }

    .footer-content {
        gap: 20px; /* Réduit de 30px */
    }

    .footer-section {
        text-align: center;
    }

    .footer-section h3::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .contact-item {
        justify-content: center;
    }

    .footer-links {
        align-items: center;
    }

    .social-links {
        justify-content: center;
    }
}
</style>