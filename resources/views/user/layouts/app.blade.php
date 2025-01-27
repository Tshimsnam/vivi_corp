<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('vivicorp/img/vavicon.png')}}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('vivicorp/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href=" {{asset('vivicorp/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('vivicorp/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('vivicorp/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    @include('user.layouts.topbar')


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('user.layouts.navbar')
    </div>
    <!-- Navbar & Carousel End -->
    @yield('content')
    
    <!-- Main Footer -->
    @include('user.layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src= {{ asset('vivicorp/lib/wow/wow.min.js') }}></script>
    <script src= {{ asset('vivicorp/lib/easing/easing.min.js') }}></script>
    <script src= {{ asset('vivicorp/lib/waypoints/waypoints.min.js') }}></script>
    <script src= {{ asset('vivicorp/lib/counterup/counterup.min.js') }}></script>
    <script src= {{ asset('vivicorp/lib/owlcarousel/owl.carousel.min.js') }}></script>
    <!-- Template Javascript -->
    <script src= {{ asset('vivicorp/js/main.js') }}></script>
</body>

</html>