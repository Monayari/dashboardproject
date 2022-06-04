@extends('layouts.master')

@section('pagetitle','Chilo -خانه ')


@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <div class="header-bg">
            <img src="{{asset("/fonts/header-bg.svg")}}" class="img-fluid" alt>
        </div>

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
                        <h1>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی</h1>
                        <p>برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید ...</p>
                        <div class="email-box">
                            <div class="input">
                                <input type="email" placeholder="آدرس ایمیل خود را وارد کنید">
                                <button>ثبت نام</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 imgs align-self-center">
                        <div class="img-bottom">
                            <img src="{{asset("/images/welcome-bottom.jpg")}}" alt>
                        </div>
                        <div class="img-top">
                            <img src="{{asset("images/welcome-top.jpg")}}" alt>
                            <a href="#" class="btn-play">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Small Start ***** -->
    <section class="section white home-fix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-bottom">
                    <div class="left-heading">
                        <h2 class="section-title">متنی آزمایشی و بی‌معنی در صنعت چاپ</h2>
                    </div>
                    <div class="left-text margin-bottom-30">
                        <p class="dark">معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده
                            می‌کنند.</p>
                        <p class="margin-bottom-60">تا صرفا به صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد
                            از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد. </p>
                        <a href="#" class="light-btn active">خدمات ما</a>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 align-self-bottom">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <x-feature-small-item :items="$items"/>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Features Small End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title dotted">لورم ایپسوم یا طرح‌نما</h2>
                    </div>
                    <div class="left-text">
                        <p class="margin-bottom-40">از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر
                            متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد.</p>
                        <x-feature-big-item/>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-md-12 col-sm-12 align-self-center"
                     data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
                    <img src="{{asset("images/blue-1.png")}}" class="img-fluid float-right" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix"
                     data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset("images/blue-2.png")}}" class="img-fluid float-left" alt="App">
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <div class="left-heading">
                        <h2 class="section-title dotted">متنی آزمایشی و بی‌معنی</h2>
                    </div>
                    <div class="left-text">
                        <p class="margin-bottom-40">از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر
                            متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد.</p>
                        <x-feature-big-item/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Counter Parallax Start ***** -->
    <section class="parallax-counter" data-image="assets/images/photos/parallax-counter.jpg">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>96</strong>
                            <span>کاربران<br><small>فعال</small></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>190</strong>
                            <span>خدمات<br><small>موجود</small></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>12</strong>
                            <span>کارمندان<br><small>متخصص</small></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>46</strong>
                            <span>پروژه<br><small>فعال</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->


    <!-- ***** Testimonials Start ***** -->
    @include('layouts.particals.testimonials')
    <!-- ***** Testimonials End ***** -->


    <!-- ***** Pricing Plans Start ***** -->
    <section class="section" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">تعرفه ها</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                            صفحه‌بندی را به پایان برند.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                @php $class=["active","active","active","active","","","",""] @endphp
                <x-pricing-item secend="2" title="پلان پایه" counter="1" price="13.000" :class="$class"/>

                @php $class=["active","active","active","active","active","active","",""] @endphp
                <x-pricing-item secend="4" active="active" title="پلان پیشرفته" counter="2" price="23.000"
                                :class="$class"/>

                @php $class=["active","active","active","active","active","active","active","active"] @endphp
                <x-pricing-item secend="6" title="پلان تخصصی" counter="3" price="33.000" :class="$class"/>

                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>


    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Parallax Start ***** -->
    @include('layouts.particals.Parallax')
    <!-- ***** Parallax End ***** -->

    <!-- ***** Blog Start ***** -->
    <section class="section white bg-center-left" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">آخرین مطالب وبلاگ</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و
                            صفحه‌بندی را به پایان برند.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <x-blog-item img="images/1_1.jpg" title="یک عنوان آزمایشی برای مطلب" href="blue-blog-single.html" description="از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در
                                همان حال کار آنها به نوعی وابسته به متن می‌باشد." />
                <x-blog-item img="images/2_1.jpg" title="لورم ایپسوم متن ساختگی با تولید سادگی" href="blue-blog-single.html" description="از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در
                                همان حال کار آنها به نوعی وابسته به متن می‌باشد." />
                <x-blog-item img="images/3_1.jpg" title="متنی آزمایشی و بی‌معنی در صنعت چاپ" href="blue-blog-single.html" description="از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در
                                همان حال کار آنها به نوعی وابسته به متن می‌باشد." />
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

@endsection
