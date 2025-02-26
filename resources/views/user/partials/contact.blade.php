<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-5">
        <div class="section-title text-center">
    <div class="badge-wrapper mb-4">
        <span class="custom-badge">Contactez-nous</span>
    </div>
    <h1 class="main-title">Si vous avez des questions, n'hésitez pas à nous contacter</h1>
    <div class="divider-custom"></div>
</div>
        </div>

        <div class="row g-5 mb-5">
            <!-- Cartes d'information -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- Carte Adresse -->
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5>Notre Adresse</h5>
                            <p>08, Avenue du commerce/Gombe
                            N°303, Lac Kipopo, C/Lubumbashi, Haut-Katanga</p>
                        </div>
                    </div>

                    <!-- Carte Email -->
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h5>Email</h5>
                            <p>Info@vivicorp.net</p>
                        </div>
                    </div>

                    <!-- Carte Téléphone -->
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5>Téléphone</h5>
                            <p>+243 997432310</p>
                            <p>+243 847447674</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-lg-8">
                <div class="contact-form-wrapper">
                    <form>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control custom-input" id="name" placeholder="Votre Nom">
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control custom-input" id="email" placeholder="Votre Email">
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control custom-input" id="subject" placeholder="Sujet">
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control custom-input" placeholder="Message" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn-send" type="submit">
                                    Envoyer le Message
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles des cartes de contact */
.contact-card {
    background: white;
    border-radius: 20px;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.icon-wrapper {
    width: 50px;
    height: 50px;
    border-radius: 15px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
}

.info-content h5 {
    color: #2d3436;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.info-content p {
    color: #636e72;
    margin: 0;
}

/* Styles du formulaire */
.contact-form-wrapper {
    background: white;
    border-radius: 24px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.custom-input {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1rem;
    transition: all 0.3s ease;
}

.custom-input:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
}

.form-floating label {
    padding-left: 1rem;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label {
    transform: scale(0.85) translateY(-0.75rem) translateX(0.15rem);
    background: white;
    padding: 0 0.5rem;
}

.btn-send {
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    color: white;
    border: none;
    border-radius: 12px;
    padding: 1rem 2rem;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
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

.btn-send:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(99, 102, 241, 0.2);
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

.contact-card, .contact-form-wrapper {
    animation: fadeInUp 0.6s ease-out forwards;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-form-wrapper {
        padding: 1.5rem;
    }

    .contact-card {
        padding: 1.25rem;
    }

    .icon-wrapper {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}
</style>