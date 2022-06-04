@extends('layouts.master')


@section('pagetitle','Chilo -تماس با ما')


<section class="page">
    <!-- ***** Page Top Start ***** -->
    @section('head')

        <h1>تماس با ما</h1>

    @endsection

    @section('text')

        <li class="active">تماس با ما</li>

    @endsection

<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    @section('content')
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <!-- ***** Google Maps Start ***** -->
                                    <div class="map-canvas" data-zoom="12" data-lat="-37.811085" data-lng="144.955631"
                                         data-type="roadmap" data-hue="#ffc400" data-title="Chilo"
                                         data-icon-path="assets/images/marker-blue.png"
                                         data-content="455 West Orchard Street<br>Kings Mountain, NC 28086<br><br><a href='mailto:support@yourbrand.com'>support@yourbrand.com</a>">
                                    </div>
                                    <!-- ***** Google Maps End ***** -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>
                                        <div class="txt">
                                            <p>نشانی: تهران - یوسف آباد - کوچه بیستم - پلاک 47 - واحد 1</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="txt">
                                            تلفن: <a href="tel:+982123456789">021.23456789</a>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="txt">
                                            ایمیل: <a href="mailto:support@yourbrand.com">support@yourbrand.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="contact-bottom">
                            <div class="row">
                                <!-- ***** Contact Text Start ***** -->
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <h5 class="margin-bottom-30">تماس با ما</h5>
                                    <div class="contact-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. </p>
                                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                            شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                            کاربردی می باشد.</p>
                                    </div>
                                </div>
                                <!-- ***** Contact Text End ***** -->

                                <!-- ***** Contact Form Start ***** -->
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <input type="text" placeholder="نام شما">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <input type="text" placeholder="آدرس ایمیل">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea placeholder="متن پیام"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="light-btn active">ارسال پیام</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ***** Contact Form End ***** -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>

@section('Sidbar')

@endsection



<script src="http://maps.google.com/maps/api/js?key=AIzaSyAthC_2x5GtKhiH7rUumkMbwvp31qyFyA8"></script>
<script src="js/map-script.js"></script>


@endsection
