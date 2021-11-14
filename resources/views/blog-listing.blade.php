<!DOCTYPE html>

<html lang="en">

<head>
    @include('includes.head')
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



<!-- ===== Main Page Section ===== -->
<section class="main" id="pages">

    <!-- Title -->
            @include('includes.background')
        <h2>لیست وبلاگ ها</h2>
    </div>
    <!-- End of Title -->

</section>
<!-- ===== End of Main Page Section ===== -->




<!-- ===== Start of Blog Section ===== -->
<section id="blog">
    <div class="container">


        <!-- Start of Blog Post 1 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post1.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">12</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail.html">10 تن از مدیتیشن های برتر</a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail.html" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 1 -->

        <!-- Start of Blog Post 2 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post2.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">11</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail.html">مهمانی بعدی سرزمین شناگران </a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail.html" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 2 -->

        <!-- Start of Blog Post 3 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post3.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">11</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail">استخرهای جدید ما</a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 3 -->

        <!-- Start of Blog Post 4 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post4.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">10</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail">چرا بچه ها از آب خارج نمی شوند</a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 4 -->

        <!-- Start of Blog Post 5 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post1.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">10</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail">10 تن از مدیتیشن های برتر</a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 5 -->

        <!-- Start of Blog Post 6 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post2.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">9</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail">مهمانی بعدی سرزمین شناگران </a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 6 -->

        <!-- Start of Blog Post 7 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post3.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">9</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail">استخرهای جدید ما</a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 7 -->

        <!-- Start of Blog Post 8 -->
        <article class="col-md-12 blog-post blog-listing">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail"><img src="{{ asset('assets/client/images/img/blog-post4.jpg') }}" class="img-responsive" alt=""></a>
                <div class="date">
                    <span class="day">8</span>
                    <span class="publish-month">مهر</span>
                </div>
            </div>

            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail">چرا بچه ها از آب خارج نمی شوند</a></h4>
                <div class="post-detail">
                    <span><i class="fa fa-user"></i>نویسنده</span>
                    <span><i class="fa fa-clock-o"></i>4:30</span>
                    <span><i class="fa fa-comments-o"></i>12 نظر</span>
                </div>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <a href="blog-detail" class="btn">بیشتر بخوانید</a>
            </div>
        </article>
        <!-- End of Blog Post 8 -->



        <div class="col-md-12 text-center">
            <a href="#" class="btn-border" id="loadMore">بارگذاری موارد بیشتر</a>
            <div id="loadmsg"></div>
        </div>

    </div>
</section>
<!-- ===== End of Blog Section ===== -->




<!-- ===== Start of Footer ===== -->
<footer id="main-footer">
    @include('includes.footer')
</footer>
<!-- ===== End of Footer ===== -->




@include('includes.js')

</body>


</html>
