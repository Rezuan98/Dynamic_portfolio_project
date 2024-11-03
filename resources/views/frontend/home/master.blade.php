<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('barTitle')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Favicons -->
  <link href="{{asset('frontendAsset/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontendAsset/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontendAsset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontendAsset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontendAsset/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontendAsset/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontendAsset/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('frontendAsset/assets/css/main.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('frontend.includes.side-header')

  <main class="main">

    <!-- Hero Section -->
   @include('frontend.includes.hero-banner')

    <!-- About Section -->
    @include('frontend.includes.about')
    <!-- /About Section -->

    

    <!-- Skills Section -->
    @include('frontend.includes.skills')
    <!-- /Skills Section -->

    <!-- Resume Section -->
    @include('frontend.includes.resume')
    <!-- /Resume Section -->

    <!-- Portfolio Section -->
    @include('frontend.includes.portfolio')
    <!-- /Portfolio Section -->

    <!-- Services Section -->
    @include('frontend.includes.services')<!-- /Services Section -->

    <!-- Testimonials Section -->
    @include('frontend.includes.testimonial')
   <!-- /Testimonials Section -->

    <!-- Contact Section -->
    @include('frontend.includes.contact')
    <!-- /Contact Section -->

  </main>

  @include('frontend.includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontendAsset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontendAsset/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('frontendAsset/assets/js/main.js')}}"></script>
  <script> 
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;
   
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
   
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
   
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break; 
    }
    @endif 

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</body>

</html>