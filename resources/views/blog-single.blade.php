@extends('layouts.master')

@section('pagetitle','Chilo -مطلب نمونه'))


<section class="page">
    <!-- ***** Page Top Start ***** -->

    @section('head')

        <h1 class="margin-bottom-60">لورم ایپسوم متن ساختگی با تولید سادگی</h1>

    @endsection

    @section('text')


        <li><a href="blue-index.html">وبلاگ</a></li>
        <li class="active">یک مطلب آزمایشی</li>

    @endsection

<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    @section('content')
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** Page Content Start ***** -->

                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 margin-bottom-30">
                                <div class="blog-post-thumb big mbottom-60">
                                    <!-- ***** Post Top Start ***** -->
                                    <div class="img">
                                        <img src="images/4_1.jpg" alt>
                                        <div class="date">
                                            <span>13</span>
                                            <strong>فروردین</strong>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="blog-text">
                                            <ul class="post-meta mbottom-20">
                                                <li><a href="#"><span class="icon fa fa-user"></span> توسط مدیر</a></li>
                                                <li><a href="#"><span class="icon fa fa-comment-o"></span> 3 دیدگاه</a>
                                                </li>
                                            </ul>
                                            <!-- ***** Post Top End ***** -->

                                            <!-- ***** Post Content Start ***** -->
                                            <div class="text post-detail">
                                                <p>به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته
                                                    می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر
                                                    کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده
                                                    می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر
                                                    متن باشد.</p>
                                                <p>معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و
                                                    بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند
                                                    که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد
                                                    چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
                                                    شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت
                                                    حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن
                                                    می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را
                                                    صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.</p>
                                                <blockquote>
                                                    <div class="text">
                                                        <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                                            راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                                                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                                                            موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                    </div>
                                                    <div class="author">علی وکیلی</div>
                                                </blockquote>
                                                <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                    ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                                                    و آینده شناخت فراوان جامعه و متخصصان را می طلبد.</p>
                                            </div>
                                            <!-- ***** Post Content End ***** -->

                                            <!-- ***** Post Share Start ***** -->
                                            <div class="post-footer">
                                                <span>اشتراک گذاری</span>
                                                <ul class="share">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- ***** Post Share End ***** -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ***** Comment List Start ***** -->
                            <div class="col-lg-12">
                                <div class="section-comments">
                                    <h5 class="margin-bottom-30">دیدگاه کاربران (3 دیدگاه)</h5>
                                    <ul>
                                        <x-comment-item img="images/comment-avatar.png" name="آریا شیرازی" date="13 فروردین 1398" content="در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                                    راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                                    دستاوردهای اصلی و جوابگوی سوالات باشد." />
                                        <x-comment-item img="images/comment-avatar.png" name="مهسا ایرانی" date="29 اسفند 1397" content="در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                                    راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                                    دستاوردهای اصلی و جوابگوی سوالات باشد." />
                                    </ul>
                                </div>
                            </div>
                            <!-- ***** Comment List End ***** -->

                            <!-- ***** Comment Form Start ***** -->
                            <div class="col-lg-12">
                                <div class="post-comment">
                                    <h5 class="margin-bottom-30">دیدگاه خود را بنویسید</h5>
                                    <div class="comment-form">
                                        <form action method="post">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-item">
                                                        <label for="f1">نام شما:</label>
                                                        <input type="text" id="f1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-item">
                                                        <label for="f2">آدرس ایمیل:</label>
                                                        <input type="text" id="f2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label for="f3">دیدگاه شما:</label>
                                                        <textarea id="f3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" class="dark-btn pull-right">ارسال دیدگاه
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Comment Form End ***** -->
                        </div>
                    </div>
                    <!-- ***** Page Content End ***** -->


                    <!-- ***** Aside Start ***** -->
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12"> --}}
                    {{-- <aside class="default-aside"> --}}
                    @section('search')
                        <div class="search-widget">
                            <div class="search">
                                <form>
                                    <input type="text" placeholder="جستجو در سایت">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    @endsection
                    {{-- @section('sidbar') --}}
                    @include('layouts.particals.Sidbar') -
                {{-- </aside> --}}
                {{-- </div> --}}

                <!-- ***** Aside End ***** -->
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>


@endsection
