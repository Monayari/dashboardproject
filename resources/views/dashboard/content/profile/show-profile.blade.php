@extends('dashboard.layout.master')

@section('pagetitle', 'پروفایل')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">پروفایل</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{route('dashboard')}}">
                                <i class="fas fa-home"></i> خانه</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">اضافی</a>
                        </li>
                        <li class="breadcrumb-item active">پروفایل</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Your content goes here  -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">

                  
                 </div>
                <div class="card"> 
                    <ul class="nav nav-tabs">
                        <li class="nav-item m-l-10">
                            <a class="nav-link active" data-toggle="tab" href="#about">درباره</a>
                        </li>
                        <li class="nav-item m-l-10">
                            <a class="nav-link" data-toggle="tab" href="#skills">مهارت ها</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">

                            <small class="text-muted">آدرس ایمیل: </small>
                            <p>{{$user->email}}</p>
                            <hr>
                            <small class="text-muted">تلفن: </small>
                            <p>{{$user->phone_number}}</p>
                            <hr>
                        </div> 
                        @if($profile)
                        <div class="tab-pane body" id="skills">
                            <ul class="list-unstyled">
                                <li>
                                    <div>{{$user->profile->favoraite}}</div>
                                    <div class="progress skill-progress m-t-20">
                                        <div class="progress-bar l-bg-green width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @else
                        <div class="tab-pane body" id="skills">
                            <ul class="list-unstyled">
                                <li>

                                    <div class="progress skill-progress m-t-20">
                                        <div class="progress-bar l-bg-green width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="profile-tab-box">
                    <div class="contact-grid">


<div class="profile-header bg-dark">
    <div class="user-name">{{$user->name}}</div>
    
    @if($profile)
    <div class="name-center">{{$user->profile->biography}}</div>
    @endif
</div>
@if(!$profile)
<img src="{{asset('/images/dashboard/user.png')}}" class="user-img" alt>
@else
<img src="{{asset('images/profile/'.$user->profile->img)}}" class="user-img" alt>
@endif
<div>
    <span class="phone">
        <i class="material-icons">phone</i>{{$user->phone_number}}</span>
</div>
<div class="row">
    <div class="col-4">
    <small class="text-muted">آدرس ایمیل: </small>
    <p>{{$user->email}}</p> 
    </div>
 
</div>



                        <div class="p-l-20">
                            <ul class="nav">
                                @if($profile)
                                <li class="nav-item tab-all">
                                    <a class="nav-link active show" href="#project" data-toggle="tab">درباره من</a>
                                </li>
                                                        
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card project_widget">
                                    <!-- <div class="header">
                                        <h2>درباره</h2>
                                    </div> -->
                                    <div class="body" id="profile">
                                        <div class="row">
                                            <div class="col-md-3 col-6 b-r">
                                                <strong>نام کامل</strong>
                                                <br>
                                                <p class="text-muted">{{$user->profile->first_name}}{{$user->profile->last_name}}</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r">
                                                <strong>موبایل</strong>
                                                <br>
                                                <p class="text-muted">{{$user->phone_number}}</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r">
                                                <strong>ایمیل</strong>
                                                <br>
                                                <p class="text-muted">{{$user->email}}</p>
                                            </div>

                                        </div>

                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card project_widget">
                                    <div class="header">
                                        <h2>تحصیلات</h2>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li>{{$user->profile->biography}}</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card project_widget">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card project_widget">

                                    <div class="body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                               
                        @endif
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@push('scripts')

<script src="{{asset('/js/dashboard/app.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('/js/dashboard/admin.js')}}"></script>
@endpush
