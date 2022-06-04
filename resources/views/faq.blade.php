@extends('layouts.master')

@section('pagetitle','Chilo -سوالات متداول')


<section class="page">
    <!-- ***** Page Top Start ***** -->
    @section('head')

        <h1>سوالات متداول</h1>

    @endsection

    @section('text')

        <li class="active">سوالات متداول</li>

    @endsection

<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    @section('content')
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** Page Content Start ***** -->

                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="faq-wrapper">
                            <div class="faq-header">
                                <h2>سوالات متداول</h2>
                                <p>طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال
                                    کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                                    گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.</p>

                                <div class="search">
                                    <input type="text" placeholder="جستجو در سوالات متداول">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-1">
                                            <div class="num">1</div>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <div class="num">2</div>
                                            صنعت چاپ و با استفاده از طراحان گرافیک است؟
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <div class="num">3</div>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <div class="num">4</div>
                                            صنعت چاپ و با استفاده از طراحان گرافیک است؟
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <div class="num">5</div>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <div class="num">6</div>
                                            صنعت چاپ و با استفاده از طراحان گرافیک است؟
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7"
                                            data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <div class="num">7</div>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                کاربردی می باشد.</p>
                                            <p>دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                                استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Page Content End ***** -->

                    <!-- ***** Aside Start ***** -->

                    @include('layouts.particals.Sidbar') -

                    <!-- ***** Aside End ***** -->
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>
@endsection
