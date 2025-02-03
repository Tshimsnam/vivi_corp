<div class="container-fluid py-5 wow fadeInUp" id="services" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nos Services</h5>
            <h1 class="mb-0">Des solutions personnalisées pour votre entreprise prospère</h1>
        </div>
        <div class="row g-5 ">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-black shadow-lg p-4 d-flex flex-column align-items-center justify-content-center text-center" style="border-radius: 18px;">
                    <div class="service-icon bg-primary rounded-full p-4 mb-3">
                        <i class="{{$service->icon}} text-white text-1xl"></i>
                    </div>
                    <h4 class="mb-3">{{$service->title}} </h4>
                    <p class="m-0 text-justify"> {{$service->content}} </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
