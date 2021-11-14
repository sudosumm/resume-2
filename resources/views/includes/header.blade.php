
<!-- Logo -->
<div class="col-md-4 pull-right">
    <a class="navbar-brand" href="index"><img src="{{ asset('assets/client/images/logo.svg') }}" alt="logo"></a>
    <!-- INSERT YOUR LOGO HERE -->
</div>

<!-- Main Menu -->
<div class="col-md-8">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
            <span class="sr-only">تغییر ناوبری</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse pull-right cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="main-nav">
        <h3>منو</h3>
        <ul class="nav navbar-nav navbar-right">
            <li class="active dropdown" role="presentation">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">خانه<i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index">صفحه اصلی</a></li>
{{--                    <li><a href="fullscreen-image.html">تصویر تمام صفحه</a></li>--}}
{{--                    <li><a href="fullscreen-video.html">ویدیوی تمام صفحه </a></li>--}}
                </ul>
            </li>
            <li class="dropdown" role="presentation">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">صفحات<i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="about">درباره ما</a></li>
                    <li><a href="404">404</a></li>
{{--                    <li><a href="coming-soon">به زودی</a></li>--}}
                </ul>
            </li>
            <li class="dropdown" role="presentation">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">وبلاگ<i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="blog-listing">لیست وبلاگ ها</a></li>
                    <li><a href="blog-detail">جزئیات وبلاگ</a></li>
                </ul>
            </li>
            <li class="dropdown" role="presentation">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">تماس با ما<i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="contact">تماس باما</a></li>
{{--                    <li><a href="contact2.html">تماس 2</a></li>--}}
                </ul>
            </li>
        </ul>
    </div>
</div>
