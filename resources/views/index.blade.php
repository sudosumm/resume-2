<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Swimmerland - Water Park HTML Template">
    <meta name="keywords" content="water park, pool, summer, swimming, swimmerland">
    <meta name="author" content="GnoDesign">
    <title>Swimmerland - Water Park HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('assets/client/images/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/client/images/apple-touch-icon.html') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/shuffle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/responsive.css') }}">
</head>

<body>


<!-- ===== Start of Header ===== -->
<header class="main">
    <nav class="navbar navbar-default navbar-static-top fluid_header">
        <div class="container">
            @include('includes.header')
        </div>
    </nav>
</header>
<!-- ===== End of Header ===== -->



<!-- ===== Main Section - Slider ===== -->
<section class="main" id="home">
    <!-- Swiper -->
    <div class="swiper-container fullscreen">
        <div class="swiper-wrapper">

            @include('includes.slideindex')

        </div>
        <!-- End of Swiper Wrapper -->

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- scroll down -->
        <div class="scroll-down"><a href="#about-us"><i class="fa fa-angle-double-down"></i></a></div>


    </div>
    <!-- End of Swiper Container -->
</section>
<!-- ===== End of Main Section - Slider ===== -->



<!-- ===== Start About Us Section ===== -->
<section id="about-us">
    <div class="container-fluid">
        <div class="row">

            @include('includes.aboutusindex')

        </div>
    </div>
</section>
<!-- ===== End About Us Section ===== -->



<!-- ===== Start of Gallery Section ===== -->
<section id="gallery">
    <div class="container-fluid">

        @include('includes.gallery')

    </div>
</section>
<!-- ===== End of Gallery Section ===== -->



<!-- ===== Start of Training Courses Section ===== -->
<section id="courses">
    <div class="container-fluid">
        <div class="col-md-12 main-content">
            <h2 class="section-title">دوره های آموزشی</h2>
        </div>

        <!-- Start of Course Main -->
            @include('includes.courses')
        <!-- Start of Course Main -->

    </div>
</section>
<!-- ===== End of Training Courses Section ===== -->




<!-- ===== Start of CountUp Section ===== -->
<section id="countup">
    <div class="container main-content">
        <div class="col-md-12">

           @include('includes.countup')

        </div>
    </div>
</section>
<!-- ===== End of CountUp Section ===== -->




<!-- ===== Start of Blog Section ===== -->
<section id="blog">
    <div class="container">

        @include('includes.blogpost')

        <div class="col-md-12 text-center">
            <a href="blog-listing.html" class="btn-border">بازدید از وبلاگ</a>
        </div>

    </div>
</section>
<!-- ===== End of Blog Section ===== -->




<!-- ===== Start of Testimonial Section ===== -->
<section id="testimonials">
    <div class="container main-content">

        <div class="col-md-12">
            <h2 class="section-title"><span>مشتریان خوشحال </span><br> گواهینامه </h2>
        </div>

       @include('includes.testimonial')

    </div>
</section>
<!-- ===== End of Testimonial Section ===== -->



<!-- ===== Start of Pricing Plan Section ===== -->
<section id="pricing">

    @include('includes.pricing')

</section>
<!-- ===== Start of Pricing Table Section ===== -->



<!-- ===== Start of Sign Up Section ===== -->
<section id="signup">
        @include('includes.signup')
</section>
<!-- ===== End of Sign Up Section ===== -->



<!-- ===== Start of Latest Event Section ===== -->
<section id="events">
    @include('includes.events')
</section>
<!-- ===== End of Latest Event Section ===== -->




<!-- ===== Start of Partners Section ===== -->
<section id="partners">
    <div class="container main-content">
        <div class="owl-carousel partners-slider">

{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <a href="#"><img src="{{ asset('assets/client/images/partners/envato-logo.svg') }}" alt="image title"></a>--}}
{{--            </div>--}}

        </div>
    </div>
</section>
<!-- ===== End of Partners Section ===== -->




<!-- ===== Start of Footer ===== -->
<footer id="main-footer">
    @include('includes.footer')
</footer>
<!-- ===== End of Footer ===== -->




<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
<script src="{{ asset('assets/client/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/client/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/client/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/client/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.shuffle.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/client/js/calendar.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.ajaxchimp.js') }}"></script>
<script src="{{ asset('assets/client/js/custom.js') }}"></script>

<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/client/js/respond.min.js') }}"></script>
<![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</body>



</html>
