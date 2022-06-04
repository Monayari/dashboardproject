@extends('dashboard.layout.master')

@section('pagetitle','نمونه کار')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">نمونه کارها</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">برنامه ها</a>
                            </li>
                            <li class="breadcrumb-item active">نمونه کارها</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="bootstrap snippet">
                                <section id="portfolio" class="gray-bg padding-top-bottom">
                                    <!--==== Portfolio Filters ====-->
                                    <div class="categories">
                                        <ul>
                                            <li class="active">
                                                <a href="#" data-filter="*">همه دسته بندی ها</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".web-design">طراحی وب</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".apps">برنامه ها</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".psd">پی اس دی</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- ======= Portfolio items ===-->
                                    <div class="projects-container scrollimation in">
                                        <div class="row">
                                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post4.jpg')}}" alt>

                                                        <span class="project-title">عنوان 1</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge cboxElement" href="#" title="Bills Project"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                    <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post5.jpg')}}" alt>
                                                        <span class="project-title">عنوان 2</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="link centered" href="#"><i
                                                            class="fa fa-eye fa-fw"></i></a>

                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post6.jpg')}}" alt>
                                                        <span class="project-title">عنوان 3</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge centered cboxElement" href="#"
                                                       title="Get Colored"><i class="fa fa-expand fa-fw"></i></a>

                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post7.jpg')}}" alt>

                                                        <span class="project-title">عنوان 4</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge cboxElement" href="#" title="Holiday Selector"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                    <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post8.jpg')}}" alt>

                                                        <span class="project-title">عنوان 5</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge cboxElement" href="#" title="Scavenger Hunt"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                    <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post9.jpg')}}" alt>

                                                        <span class="project-title">عنوان 6</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge cboxElement" href="#" title="Sonor"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                    <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post11.jpg')}}" alt>

                                                        <span class="project-title">عنوان 7</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge cboxElement" href="#" title="Bills Project"><i
                                                            class="fa fa-expand fa-fw"></i></a>
                                                    <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post12.jpg')}}" alt>
                                                        <span class="project-title">عنوان 8</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="link centered" href="#"><i
                                                            class="fa fa-eye fa-fw"></i></a>

                                                </div>
                                            </article>
                                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                                                <div class="portfolio-thumb in">
                                                    <a href="#" class="main-link">
                                                        <img class="img-responsive img-center"
                                                             src="{{asset('/images/dashboard/post13.jpg')}}" alt>
                                                        <span class="project-title">عنوان 9</span>
                                                        <span class="overlay-mask"></span>
                                                    </a>
                                                    <a class="enlarge centered cboxElement" href="#"
                                                       title="Get Colored"><i class="fa fa-expand fa-fw"></i></a>

                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script src="{{asset("/js/dashboard/app.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("/js/dashboard/admin.js")}}"></script>
    <script src="{{asset("/js/dashboard/portfolio.js")}}"></script>


@endpush
