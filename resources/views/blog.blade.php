@extends('layouts.master')


@section('pagetitle','Chilo -وبلاگ')


<section class="page">
    <!-- ***** Page Top Start ***** -->
    @section('head')

        <h1>وبلاگ</h1>

    @endsection

    @section('text')

        <li class="active">وبلاگ</li>

    @endsection

<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    @section('content')

        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** Page Content Start ***** -->

                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row margin-bottom-30">
                            <x-blog-item img="images/1_1.jpg" href="blue-blog-single.html"
                                         title="لورم ایپسوم متن ساختگی با تولید سادگی" description="آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا
                                            مرحله طراحی و صفحه‌بندی را به پایان برند.">
                                <div class="date">
                                    <span>13</span>
                                    <strong>فروردین</strong>
                                </div>
                            </x-blog-item>
                            <x-blog-item img="images/2_1.jpg" href="blue-blog-single.html"
                                         title="لورم ایپسوم متن ساختگی با تولید سادگی" description="آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا
                                            مرحله طراحی و صفحه‌بندی را به پایان برند.">
                                <div class="date">
                                    <span>13</span>
                                    <strong>فروردین</strong>
                                </div>
                            </x-blog-item>
                            <x-blog-item img="images/3_1.jpg" href="blue-blog-single.html"
                                         title="لورم ایپسوم متن ساختگی با تولید سادگی" description="آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا
                                            مرحله طراحی و صفحه‌بندی را به پایان برند.">
                                <div class="date">
                                    <span>13</span>
                                    <strong>فروردین</strong>
                                </div>
                            </x-blog-item>
                            <x-blog-item img="images/4_1.jpg" href="blue-blog-single.html"
                                         title="لورم ایپسوم متن ساختگی با تولید سادگی" description="آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا
                                            مرحله طراحی و صفحه‌بندی را به پایان برند.">
                                <div class="date">
                                    <span>13</span>
                                    <strong>فروردین</strong>
                                </div>
                            </x-blog-item>
                            <x-blog-item img="images/5_1.jpg" href="blue-blog-single.html"
                                         title="لورم ایپسوم متن ساختگی با تولید سادگی" description="آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا
                                            مرحله طراحی و صفحه‌بندی را به پایان برند.">
                                <div class="date">
                                    <span>13</span>
                                    <strong>فروردین</strong>
                                </div>
                            </x-blog-item>
                            <x-blog-item img="images/2_1.jpg" href="blue-blog-single.html"
                                         title="لورم ایپسوم متن ساختگی با تولید سادگی" description="آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا
                                            مرحله طراحی و صفحه‌بندی را به پایان برند.">
                                <div class="date">
                                    <span>13</span>
                                    <strong>فروردین</strong>
                                </div>
                            </x-blog-item>
                        </div>

                        <!-- ***** Pagination Start ***** -->
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">قبلی</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">بعدی</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- ***** Pagination End ***** -->
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
                {{-- @section('Sidbar')  --}}
                @include('layouts.particals.Sidbar')
                {{-- </aside> --}}
                {{-- </div> --}}
                <!-- ***** Aside End ***** -->
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>


<!-- ***** Footer Start ***** -->

<!-- ***** Footer End ***** -->


@endsection


