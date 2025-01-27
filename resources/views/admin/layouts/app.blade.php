<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="  {{asset('vivicorpAdmin/assets/vendors/mdi/css/materialdesignicons.min.css')}} ">
    <link rel="stylesheet" href="  {{asset('vivicorpAdmin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}} ">
    <link rel="stylesheet" href="  {{asset('vivicorpAdmin/assets/vendors/css/vendor.bundle.base.css')}} ">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="  {{asset('vivicorpAdmin/assets/vendors/font-awesome/css/font-awesome.min.css')}} " />
    <link rel="stylesheet" href="  {{asset('vivicorpAdmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="  {{asset('vivicorpAdmin/assets/css/style.css')}} ">
    <!-- End layout styles -->
    <link rel="icon" href="{{asset('vivicorp/img/vavicon.png')}}" type="image/x-icon">
    {{-- <link rel="shortcut icon" href="  {{asset('vivicorpAdmin/assets/images/favicon.png')}} " /> --}}
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->

        
        <div class="main-panel">
          <div class="content-wrapper">

            @include('admin.layouts.breadcrumb')
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="  {{asset('vivicorpAdmin/assets/vendors/js/vendor.bundle.base.js')}} "></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="  {{asset('vivicorpAdmin/assets/vendors/chart.js/Chart.min.js')}} "></script>
    <script src="  {{asset('vivicorpAdmin/assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}} "></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="  {{asset('vivicorpAdmin/assets/js/off-canvas.js')}} "></script>
    <script src="  {{asset('vivicorpAdmin/assets/js/hoverable-collapse.js')}} "></script>
    <script src="  {{asset('vivicorpAdmin/assets/js/misc.js')}} "></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="  {{asset('vivicorpAdmin/assets/js/dashboard.js')}} "></script>
    <!-- End custom js for this page -->

    @yield('scripts')
  </body>
</html>