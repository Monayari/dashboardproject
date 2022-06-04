@extends('layouts.master')

@section('pagetitle','Chilo -مطلب ازمایشی')


<section class="page">
    <!-- ***** Page Top Start ***** -->

    @section('head')
        <h1>عنوان یک سرویس آزمایشی</h1>
    @endsection

    @section('text')
        <li><a href="index.html">خدمات ما</a></li>
        <li class="active">یک سرویس آزمایشی</li>
    @endsection

<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    @section('content')
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** Page Content Start ***** -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="page-detail">
                            <img src="images/1_4.jpg" class="img-fluid rounded margin-bottom-45" alt>

                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ
                                به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل
                                دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>

                            <!-- ***** Gallery Start ***** -->
                            <div class="row page-gallery-wrapper">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="images/1_1.jpg" class="page-gallery" title="Manage In One Place">
                                        <img src="images/1_1.jpg" alt>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="images/2_1.jpg" class="page-gallery" title="Manage In One Place">
                                        <img src="images/2_1.jpg" alt>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="images/3_1.jpg" class="page-gallery" title="Manage In One Place">
                                        <img src="images/3_1.jpg" alt>
                                    </a>
                                </div>
                            </div>
                            <!-- ***** Gallery End ***** -->

                            <p>از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در
                                همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                                گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.</p>

                            <div class="row margin-top-45">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="services-post">
                                        <div class="img">
                                            <img src="images/3_2.jpg" alt>
                                        </div>
                                        <div class="post-content">
                                            <h3>عنوان خدمات مرتبط</h3>
                                            <div class="text">
                                                معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی
                                                استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند.
                                            </div>
                                            <a href="blue-features-single.html" class="dark-btn">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="services-post">
                                        <div class="img">
                                            <img src="images/6.jpg" alt>
                                        </div>
                                        <div class="post-content">
                                            <h3>عنوان مطلب آزمایشی</h3>
                                            <div class="text">
                                                معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی
                                                استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند.
                                            </div>
                                            <a href="blue-features-single.html" class="dark-btn">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Page Content End ***** -->

                    <!-- ***** Aside Start ***** -->
                @include('layouts.particals.Sidbar')
                <!-- ***** Aside End ***** -->
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>


<!-- ***** Footer Start ***** -->

<!-- ***** Footer End ***** -->

@endsection

@section('js')
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
@endsection



