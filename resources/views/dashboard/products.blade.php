@extends('dashboard.layout.master')
@section('pagetitle','جزئیات محصولات')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">محصولات</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فروشگاه</a>
                            </li>
                            <li class="breadcrumb-item active">محصولات</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p7.jpg')}}" img2="{{asset('/images/dashboard/p7-1.jpg')}}"
                                                          percent="20%" name="دوربین حرفه ای" price="1600 تومان"
                                                          offPrice="2000 تومان" stars="4" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p8.jpg')}}" img2="{{asset('/images/dashboard/p8-1.jpg')}}"
                                                          percent="50%" name="عینک آفتابی" price="5000 تومان"
                                                          offPrice="10000 تومان" stars="5" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p9.jpg')}}" img2="{{asset('/images/dashboard/p9-1.jpg')}}"
                                                          percent="50%" name="فندک" price="5000 تومان"
                                                          offPrice="10000 تومان" stars="5" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p10.jpg')}}" img2="{{asset('/images/dashboard/p10-1.jpg')}}"
                                                          percent="50%" name="بیسکویت ها" price="5000 تومان"
                                                          offPrice="10000 تومان" stars="5" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p11.jpg')}}" img2="{{asset('/images/dashboard/p11-1.jpg')}}"
                                                          percent="20%" name="بستنی" price="1600 تومان"
                                                          offPrice="2000 تومان" stars="4" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p12.jpg')}}" img2="{{asset('/images/dashboard/p12-1.jpg')}}"
                                                          percent="50%" name="رژ لب" price="5000 تومان"
                                                          offPrice="10000 تومان" stars="5" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p7.jpg')}}" img2="{{asset('/images/dashboard/p7-1.jpg')}}"
                                                          percent="20%" name="دوربین حرفه ای" price="1600 تومان"
                                                          offPrice="2000 تومان" stars="4" />
                                <x-dashboard.product-card img1="{{asset('/images/dashboard/p8.jpg')}}" img2="{{asset('/images/dashboard/p8-1.jpg')}}"
                                                          percent="50%" name="عینک آفتابی" price="5000 تومان"
                                                          offPrice="10000 تومان" stars="5" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
            </div>
        </div>
    </section>
@push('scripts')
    <script src="{{asset("/js/dashboard/app.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("/js/dashboard/admin.js")}}"></script>

@endpush
