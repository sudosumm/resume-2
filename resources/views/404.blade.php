<!DOCTYPE html>

<html lang="en">

<head>
    @include('includes.head')
</head>

<body>


<!-- ===== Start of Header ===== -->
<header class="main overlay" id="page-404">
    <nav class="navbar navbar-default navbar-static-top fluid_header">
        <div class="container pad70">
            @include('includes.header')
        </div>
    </nav>
</header>
<!-- ===== End of Header ===== -->





<!-- ===== Start 404 Header Section ===== -->
<section class="main" id="not-found">
    <div class="container">
        <div class="col-md-6 error-detail">
            <h2>404</h2>
            <h4>صفحه موجود نیست</h4>
            <a href="index" class="btn">بازگشت به صفحه اصلی</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/client/images/img/error-illustration.svg') }}" alt="">
        </div>
    </div>
</section>
<!-- ===== Start 404 Header Section ===== -->




<!-- ===== Start of Footer ===== -->
<footer id="main-footer">
    @include('includes.footer')
</footer>
<!-- ===== End of Footer ===== -->




@include('includes.js')

</body>

</html>
