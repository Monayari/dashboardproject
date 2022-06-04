@extends('dashboard.layout.master')

@section('pagetitle','داشبورد')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">داشبورد 2</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item active">داشبورد 2</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <x-dashboard.banner-card title="مجموع فروش" number="4000" id="banner-chart1"/>
                <x-dashboard.banner-card title="بازدید کنندگان" number="3345" id="banner-chart2"/>
                <x-dashboard.banner-card title="سفارشات" number="2364" id="banner-chart3"/>
                <x-dashboard.banner-card title="سود" number="75999 تومان" id="banner-chart4"/>
            </div>
            <div class="row clearfix">
                <!-- Bar chart with line -->
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>نمودار</strong> میانگین</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="echart_sonar" class="chartsh"></div>
                        </div>
                    </div>
                </div>
                <!-- line chart -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <x-dashboard.line-chart day="1,898" week="32,112" month="72,067" color="cyan" percent="70%"/>
                    <x-dashboard.line-chart day="1,898" week="32,112" month="72,067" color="purple" percent="70%"/>

                </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>سفارشات</strong> اخیر</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>آیتم</th>
                                        <th>وضعیت</th>
                                        <th>مقدار</th>
                                        <th>پیشرفت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <x-dashboard.line-order-card img="{{asset("/images/dashboard/user1.jpg")}}" name="آرش خادلو"
                                                                 product="آیفون ایکس" status="قرار داده شده" count="2"
                                                                 color="bg-green" progress="l-bg-green" width="62"/>
                                    <x-dashboard.line-order-card img="{{asset("/images/dashboard/user2.jpg")}}" name="آرش خادملو"
                                                                 product="پیکسل 2" status="ارسال شده" count="1"
                                                                 color="l-bg-purple" progress="l-bg-purple" width="40"/>
                                    <x-dashboard.line-order-card img="{{asset("/images/dashboard/user3.jpg")}}" name="آرش خادملو"
                                                                 product="وان پلاس" status="در انتظار" count="2"
                                                                 color="l-bg-orange" progress="l-bg-orange" width="72"/>
                                    <x-dashboard.line-order-card img="{{asset("/images/dashboard/user4.jpg")}}" name="آرش خادملو"
                                                                 product="Galaxy" status="تحویل داده شده" count="3"
                                                                 color="l-bg-cyan" progress="l-bg-cyan" width="95"/>
                                    <x-dashboard.line-order-card img="{{asset("/images/dashboard/user5.jpg")}}" name="آرش خادملو"
                                                                 product="موتو زد2" status="قرار داده شده" count="4"
                                                                 color="bg-green" progress="l-bg-green" width="87"/>
                                    <x-dashboard.line-order-card img="{{asset("/images/dashboard/user6.jpg")}}" name="آرش خادملو"
                                                                 product="نوکیا" status="قرار داده شده" count="6"
                                                                 color="bg-green" progress="l-bg-green" width="62"/>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>درآمد</strong> کل</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body text-center">
                                <h4 class="m-b-20">تعداد بازدیدکنندگان</h4>
                                <h6 class="m-b-30">5,98,345</h6>
                                <div class="icon m-t-25">
                                    <div class="chart chart-bar2">
                                        6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5,10,5,6,7,9,5,6,4,8,6,8
                                    </div>
                                </div>
                                <h4 class="m-t-30">میزان رضایتمندی</h4>
                                <h6 class="displayblock m-t-10">36% میانگین</h6>
                                <canvas id="banner-chart5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>نظرات </strong>جدید</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-comment">
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user6.jpg")}}" name="آرش خادملو"
                                                            date="1 سات پیش"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user4.jpg")}}" name="آرش خادملو"
                                                            date="دیروز"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user3.jpg")}}" name="آرش خادملو"
                                                            date="10-02-2018 10:25"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user7.jpg")}}" name="آرش خادملو"
                                                            date="15-03-2018 09:15"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user9.jpg")}}" name="آرش خادملو"
                                                            date=" 11-04-2018 11:07"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user1.jpg")}}" name="آرش خادملو"
                                                            date="1 سات پیش"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user8.jpg")}}" name="آرش خادملو"
                                                            date="دیروز"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>
                                <x-dashboard.recent-comment img="{{asset("/images/dashboard/user6.jpg")}}" name="آرش خادملو"
                                                            date="1 سات پیش"
                                                            content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ. "/>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="{{asset("/images/dashboard/user9.jpg")}}" alt="avatar">
                                <div class="chat-about">
                                    <div class="chat-with">آرش خادملو</div>
                                    <div class="chat-num-messages">3 پیام جدید</div>
                                </div>
                            </div>
                            <div class="chat-history" id="chat-conversation">
                                <ul>
                                    <x-dashboard.message-sent date="10:10 صبح، امروز" name="آرش"
                                                              content="سلام آیدن، چطوری؟ پروژه چگونه می آید؟"/>
                                    <x-dashboard.message-recive date="10:10 صبح، امروز" name="آیدین"
                                                              content=" آیا ما امروز ملاقات می کنیم؟ پروژه در حال حاضر به پایان رسیده است و من
                                                نتایجی برای نشان دادن شما دارم." />
                                    <x-dashboard.message-recive date="10:10 صبح، امروز" name="آیدین"
                                                                content=" آیا ما امروز ملاقات می کنیم؟ پروژه در حال حاضر به پایان رسیده است و من
                                                نتایجی برای نشان دادن شما دارم." />
                                    <x-dashboard.message-sent date="10:10 صبح، امروز" name="آرش"
                                                              content="سلام آیدن، چطوری؟ پروژه چگونه می آید؟"/>

                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="متن را اینجا وارد کنید ..">
                                    </div>
                                </div>
                                <div class="chat-upload">
                                    <a href="#">
                                        <i class="material-icons">attach_file</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">insert_emoticon</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script src="{{asset('/js/dashboard/app.min.js')}}"></script>
    <script src="{{asset('/js/dashboard/chart.min.js')}}"></script>
    <!-- Echart Js -->
    <script src="{{asset('/js/dashboard/echarts.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('/js/dashboard/admin.js')}}"></script>
    <script src="{{asset('/js/dashboard/dashboard2.js')}}"></script>
@endpush
