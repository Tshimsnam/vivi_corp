<div id="header-carousel" class="carousel slide carousel-fade mb-0 py-0" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay-dark"></div>
            <img class="w-100" src="{{asset('vivicorp/img/sous_traitance.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated fadeIn">Excellence & Innovation</h5>
                    <h1 class="display-2 text-white mb-md-4 animated fadeInUp fw-bold">Victoria Corporation</h1>
                    <p class="lead text-white mb-4 animated fadeInUp">Votre partenaire de confiance pour l'excellence</p>
                    <div class="animated fadeInUp">
                        <a href="#about" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">En savoir plus</a>
                        <a href="{{route('services')}}" class="btn btn-outline-light py-md-3 px-md-5 rounded-pill">Nos services</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<style>
.overlay-dark {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}

.carousel-caption {
    z-index: 2;
}

.btn-primary {
    background-color: #2c3e50;
    border-color: #2c3e50;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #34495e;
    border-color: #34495e;
    transform: translateY(-2px);
}

.btn-outline-light:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}

.carousel-item img {
    filter: brightness(0.9);
}

.animated {
    animation-duration: 1.2s;
}
</style>