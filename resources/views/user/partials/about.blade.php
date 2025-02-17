<div class="container-fluid py-5 wow fadeInUp" id="about" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-danger text-uppercase">QUI SOMMES-NOUS ?</h5>
                    <h1 class="mb-0"> {{$about->title}} </h1>
                </div>
                <p class="mb-4"> {{$about->content}} </p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-black me-3"></i>Transparence</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-black me-3"></i>Personnel professionnel</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-black me-3"></i>Assistance 24h/24</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-black me-3"></i>Des prix équitables</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-dark d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Contactez-nous librement</h5>
                        <h4 class="text-black mb-0">+243 {{$about->number}} / +243 858282454 </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('assets/uploads/abouts/'.$about->image )}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
