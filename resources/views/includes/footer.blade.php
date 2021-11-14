<div class="container">

    <!-- Start of Footer Top -->
    <div class="row footer-top">

        <!-- Start of Footer About -->
        <div class="col-md-4 col-xs-6 about pull-right">
            <img src="{{ asset('assets/client/images/logo-white.svg') }}" alt="">
            <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                استفاده قرار گیرد. </p>
            <ul>
                <li><span><i class="fa fa-map-marker"></i>قم ، شهرک قدس </span></li>
                <li><span><i class="fa fa-phone"></i>(0253)7777777</span></li>
                <li><span><i class="fa fa-envelope-o"></i>support@swimmerland.com</span></li>
            </ul>
        </div>
        <!-- End of Footer About -->

        <!-- Start of Footer Navigation -->
        <div class="col-md-2 col-xs-6 footer-nav pull-right">
            <h4>ناوبری</h4>
            <ul class="footer-links">
                <li><a href="index">خانه</a></li>
                <li><a href="contact">تماس با ما</a></li>
                <li><a href="#">صفحات</a></li>
                <li><a href="blog-listing">وبلاگ</a></li>
                <li><a href="about">درباره ما</a></li>
            </ul>
        </div>
        <!-- End of Footer Navigation -->

        <!-- Start of Footer Social Media Links -->
        <div class="col-md-2 col-xs-6 footer-social pull-right">
            <h4>ما را دنبال کنید</h4>
            <ul class="footer-links">
                <li><a href="#">فیس بوک</a></li>
                <li><a href="#">توییتر</a></li>
                <li><a href="#">اینستاگرام</a></li>
                <li><a href="#">لینکدین</a></li>
                <li><a href="#">گوگل پلاس</a></li>
            </ul>
        </div>
        <!-- End of Footer Social Media Links -->

        <!-- Start of Footer Newsletter -->
        <div class="col-md-4 col-xs-6 footer-newsletter pull-right">
            <h4>خبرنامه</h4>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

            <!-- Start of Form -->
        {!! Form::open(['url' => route ('email.store' ) , 'method' => 'POST', 'class' => 'mailchimp', 'novalidate' => 'true']) !!}
        <!-- subscribe result -->
            <div id="subscribe-result"></div>
            <!-- end of subscribe result -->
            <div class="form-group">
                <div class="input-group">
                    {!! Form::text('email', null , ['class' => 'form-control', 'type' =>'email' , 'id' => 'email' ,'placeholder' =>'آدرس ایمیل' ]) !!}
                    {{--                        <input type="email" name="email" class="form-control" placeholder="آدرس ایمیل">--}}
                    <button type="submit" class="btn">اشتراک</button>
                </div>
            </div>
        {!! Form::close() !!}
        <!-- End of Form -->

        </div>
        <!-- End of Footer Newsletter -->

    </div>
    <!-- End of Footer Top -->

    <!-- Start of Footer Copyright -->
    <div class="row">
        <div class="col-md-12 text-center copyright">
            <p>تولید شده توسط © Sudosu و تمامی حقوق محفوظ است .</p>
        </div>
    </div>
    <!-- End of Footer Copyright -->

</div>
