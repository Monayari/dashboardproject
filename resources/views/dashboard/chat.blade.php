@extends('dashboard.layout.master')

@section('pagetitle','چت')

<!-- Page Loader -->

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">چت</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">برنامه ها</a>
                            </li>
                            <li class="breadcrumb-item active">چت</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="body">
                            <div id="plist" class="people-list">
                                <div class="form-line m-b-15">
                                    <input type="text" class="form-control" placeholder="جستجو...">
                                </div>
                                <div class="tab-content">
                                    <div id="chat_user">
                                        <ul class="chat-list list-unstyled m-b-0">
                                            <x-dashboard.chat-list-item active="active"
                                                                        img="{{asset('/images/dashboard/user1.jpg')}}"
                                                                        name="آرش خادملو"
                                                                        icon="offline" lastSeen="7 دقیقه پیش"/>
                                            <x-dashboard.chat-list-item img="{{asset('/images/dashboard/user2.jpg')}}"
                                                                        name="آرش خادملو"
                                                                        icon="offline" lastSeen="آنلاین"/>
                                            <x-dashboard.chat-list-item img="{{asset('/images/dashboard/user3.jpg')}}"
                                                                        name="آرش خادملو"
                                                                        icon="online" lastSeen="آنلاین"/>
                                            <x-dashboard.chat-list-item img="{{asset('/images/dashboard/user4.jpg')}}"
                                                                        name="آرش خادملو"
                                                                        icon="online" lastSeen="آنلاین"/>
                                            <x-dashboard.chat-list-item img="{{asset('/images/dashboard/user5.jpg')}}"
                                                                        name="آرش خادملو"
                                                                        icon="online" lastSeen="آنلاین"/>
                                            <x-dashboard.chat-list-item img="{{asset('/images/dashboard/user6.jpg')}}"
                                                                        name="آرش خادملو"
                                                                        icon="offline" lastSeen="30 دقیقه پیش "/>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="{{asset('/images/dashboard/user2.jpg')}}" alt="avatar">
                                <div class="chat-about">
                                    <div class="chat-with">آرش خادملو</div>
                                    <div class="chat-num-messages">2 پیام جدید</div>
                                </div>
                            </div>
                            <div class="chat-history" id="chat-conversation">
                                <ul>
                                    <x-dashboard.message-sent date="10:10 صبح، امروز" name="آرش"
                                                              content=" سلام رابرت، چطور؟ کار شما چگونه پیش می رود؟"/>
                                    <x-dashboard.message-recive date="10:12 صبح، امروز" name="رابرت"
                                                                content="خوبه. ما تقریبا تمام وظایف ما توسط مدیر ما تمام شده است."/>
                                    <x-dashboard.message-recive date="10:10 صبح، امروز" name="رابرت"
                                                                content="چطور امروز احساس می کنید؟ درباره تعطیلات چیست؟."/>
                                    <x-dashboard.message-sent date="10:10 صبح، امروز" name="آرش"
                                                              content=" من خوب هستیم، برای آخر هفته های بعدی فکر می کنیم."/>

                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="متن را اینجا وارد کنید ..">
                                    </div>
                                </div>
                                <div class="chat-upload">
                                    <button type="button"
                                            class="btn btn-circle waves-effect waves-circle waves-float bg-deep-orange">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                    <button type="button"
                                            class="btn btn-circle waves-effect waves-circle waves-float bg-deep-orange">

                                        <i class="material-icons">insert_emoticon</i>
                                    </button>
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
    <script src="{{asset("/js/dashboard/app.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("/js/dashboard/admin.js")}}"></script>
    <script src="{{asset("/js/dashboard/chat.js")}}"></script>



@endpush
