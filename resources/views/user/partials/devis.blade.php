<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Colonne d'information -->
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-uppercase gradient-badge">En savoir plus sur nos services</h5>
                    <h1 class="mb-0">{{$quote->title}}</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="assistance-card">
                            <i class="fa fa-reply"></i>
                            <span>Assistance messagerie 24h/24</span>
                        </div>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <div class="assistance-card">
                            <i class="fa fa-phone-alt"></i>
                            <span>Assistance téléphonique 24h/24</span>
                        </div>
                    </div>
                </div>
                <p class="mb-4">{{$quote->content}}</p>
                <div class="contact-info mt-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="mb-2">Contactez-nous librement</h5>
                        <h4 class="mb-0">+243 997432310 / 847447674</h4>
                    </div>
                </div>
            </div>

            <!-- Formulaire -->
            <div class="col-lg-5">
                <div class="form-container wow zoomIn" data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Votre Nom">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Votre Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <select class="form-select">
                                        <option selected>Sélectionnez un service</option>
                                        @foreach ($services as $service)
                                        <option value="{{$service->id}}">{{$service->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn-submit" type="submit">
                                    Envoyer
                                    <i class="fas fa-arrow-right ms-2"></i>
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
/* Styles généraux */
.container-fluid {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

/* Badge gradient */
.gradient-badge {
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    display: inline-block;
    font-size: 0.9rem;
}

/* Titre principal */
.section-title h1 {
    color: #2d3436;
    font-size: 2.25rem;
    font-weight: 700;
    margin-top: 1rem;
}

/* Cartes d'assistance réduites */
.assistance-card {
    display: flex;
    align-items: center;
    padding: 0.75rem 1rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.assistance-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(99,102,241,0.15);
}

.assistance-card i {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.9rem;
    margin-right: 0.75rem;
    flex-shrink: 0;
}

.assistance-card span {
    font-size: 0.9rem;
    font-weight: 500;
    color: #4b5563;
    line-height: 1.2;
}

/* Box d'information de contact */
.contact-info {
    display: flex;
    align-items: center;
    background: white;
    padding: 1.5rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.icon-box {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    margin-right: 1.5rem;
}

.info-content h5 {
    color: #6b7280;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.info-content h4 {
    color: #2d3436;
    font-size: 1.25rem;
    font-weight: 600;
}

/* Conteneur du formulaire */
.form-container {
    background: white;
    padding: 2.5rem;
    border-radius: 24px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
}

/* Style des inputs */
.input-group {
    margin-bottom: 1rem;
}

.form-control, .form-select {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1rem 1.5rem;
    height: 55px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.form-control:focus, .form-select:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 4px rgba(99,102,241,0.1);
    background: white;
}

textarea.form-control {
    height: auto;
    min-height: 120px;
}

/* Bouton submit */
.btn-submit {
    width: 100%;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    color: white;
    border: none;
    padding: 1rem;
    border-radius: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(99,102,241,0.2);
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

/* Responsive */
@media (max-width: 768px) {
    .section-title h1 {
        font-size: 1.75rem;
    }

    .assistance-card {
        padding: 0.5rem 0.75rem;
    }

    .assistance-card i {
        width: 28px;
        height: 28px;
        font-size: 0.8rem;
    }

    .assistance-card span {
        font-size: 0.85rem;
    }

    .form-container {
        padding: 1.5rem;
    }

    .contact-info {
        flex-direction: column;
        text-align: center;
        padding: 1.25rem;
    }

    .icon-box {
        margin: 0 auto 1rem;
    }

    .info-content {
        text-align: center;
    }
}

/* Effet de glassmorphism */
.form-container, .contact-info, .assistance-card {
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}
</style>