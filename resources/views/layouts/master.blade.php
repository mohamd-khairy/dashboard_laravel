<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$settings->site_name ?? config(app.name)}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset($settings->image ?? '')}}" rel="icon">
    <link href="{{asset($settings->image ?? '')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body dir="rtl">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo-img"><a href="{{url('/')}}"><img src="{{asset($settings->image)}}" alt=""></a></div>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{\Request::segment(1) == null ? 'active' : ''}}" href="{{url('/')}}">الرئيسية</a></li>
                    <li><a class="nav-link scrollto {{\Request::segment(1) == 'services' ? 'active' : ''}}" href="{{url('/services')}}">خدماتنا</a></li>
                    <li><a class="nav-link scrollto {{\Request::segment(1) == 'products' ? 'active' : ''}}" href="{{url('/products')}}">منتجاتنا</a></li>
                    <li><a class="nav-link scrollto {{\Request::segment(1) == 'about' ? 'active' : ''}}" href="{{url('/about')}}">تاريخ الشركه </a></li>
                    <li><a class="nav-link scrollto {{\Request::segment(1) == 'contact' ? 'active' : ''}}" href="{{url('/contact')}}">تواصل معنا </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->


    @yield('content')



    @if($footer)
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>{{$footer->title}}</h3>
            <p>{{$footer->description}}</p>
            <div class="social-links">
                @if($social)
                @foreach($social as $so)
                <a href="{{$so->url}}" class="facebook"><i class="{{$so->icon}}"></i></a>
                @endforeach
                @endif
                <h6 class="mt-4">{{$footer->copyright}}</h6>
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <!-- <a href="https://www.facebook.com/Shamort-%D8%B4%D9%85%D9%88%D8%B1%D8%AA-110515784424261" class="facebook"><i class="bx bxl-facebook"></i></a> -->
                <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    @endif

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>