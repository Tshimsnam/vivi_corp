{{-- <div class="container-fluid py-5 wow fadeInUp" id="team" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">MEMBRES DE L'EQUIPE</h5>
            <h1 class="mb-0">Des professionnels prêts à aider votre entreprise</h1>
        </div>
        <div class="owl-carousel carousel wow fadeInUp row " data-wow-delay="0.6s">

            @foreach ($agents as $agent)
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/uploads/agents/'.$agent->image )}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=" {{$agent->tweeter}} "><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$agent->tweeter}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$agent->tweeter}}"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$agent->tweeter}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">{{$agent->name}} <span>{{$agent->prenom}}</span> </h4>
                        <p class="text-uppercase m-0">{{$agent->fonction}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}
