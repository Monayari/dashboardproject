@extends('layouts.master')


@section('pagetitle','Chilo -درباره ما')


<section class="page">
    <!-- ***** Page Top Start ***** -->

    @section('head')
        <h1> درباره ما</h1>

    @endsection

    @section('text')

        <li class="active">درباره ما</li>

    @endsection
<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    @section('content')
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                                    <div class="about-image">
                                        <img src="images/1_3.jpg" alt>
                                        <a href="#" class="play">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                                    <h2>درباره شرکت ما</h2>
                                    <h3>ارائه دهنده خدمات طراحی و توسعه وب</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز است.</p>
                                    <div class="count">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <strong>96</strong>
                                                <span>کاربر فعال</span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <strong>190</strong>
                                                <span>گروه فعال</span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <strong>12</strong>
                                                <span>کارمند فعال</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>


<!-- ***** Parallax Start ***** -->
@include('layouts.particals.Parallax')
<!-- ***** Parallax End ***** -->


<!-- ***** Features Small Start ***** -->
<section class="section about-fix" id="features">
    <div class="container">
        <div class="row">
            <!-- ***** Features Small Item Start ***** -->
            <x-about-feature-small secend="2" icon="fa-flag-o" title="ماموریت ما" href="#"
                                   description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."/>

            <x-about-feature-small secend="4" icon="fa-paper-plane-o" title="درباره ما" href="#"
                                   description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."/>

            <x-about-feature-small secend="6" icon="fa-crosshairs" title="استراتژی ما" href="#"
                                   description="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."/>

            <!-- ***** Features Small Item End ***** -->
        </div>

    </div>
</section>
<!-- ***** Features Small End ***** -->


<!-- ***** Testimonials Start ***** -->
@include('layouts.particals.testimonials')

<!-- ***** Testimonials End ***** -->

@section('Sidbar')

@endsection


@endsection
