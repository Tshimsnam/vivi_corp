<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{route('index')}}" class="navbar-brand p-0">
            <img src="{{asset('vivicorp/img/logo2prime.png')}}" alt="Logo de l'entreprise" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">Accueil</a>
                <a href="{{route('services')}}" class="nav-item nav-link{{ Request::is('services') ? ' active' : '' }}">Services</a>
                <a href="{{route('gallery')}}" class="nav-item nav-link{{ Request::is('gallery') ? ' active' : '' }}">Gallery</a>
                <a href="{{route('contact')}}" class="nav-item nav-link{{ Request::is('contact') ? ' active' : '' }}">Contact</a>
                <a href="{{route('apropos')}}" class="nav-item nav-link{{ Request::is('Apropos') ? ' active' : '' }}">A propos</a>
            </div>
        </div>
    </nav>
</div>
