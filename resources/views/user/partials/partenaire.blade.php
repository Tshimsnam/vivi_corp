<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">

                @foreach ($partenaires as $partenaire)
                <img src=" {{asset('assets/uploads/partenaires/'.$partenaire->image )}}" alt="">                 
                @endforeach
            </div>
        </div>
    </div>
</div>