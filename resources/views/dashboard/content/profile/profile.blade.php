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
                                <a href="{{route('dashboard.index')}}">
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

                        <div class="m-b-20">

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
                                        <h5>564</h5>
                                        <small>دنبال کردن</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>18k</h5>
                                        <small>دنبال کننده</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>565</h5>
                                        <small>پست</small>
                                    </div>

                                </div>


                            </div>
                        </div>

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
                                                <div class="progress-bar l-bg-green width-per-45" role="progressbar"
                                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <div class="tab-pane body" id="skills">
                                    <ul class="list-unstyled">
                                        <li>

                                            <div class="progress skill-progress m-t-20">
                                                <div class="progress-bar l-bg-green width-per-45" role="progressbar"
                                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="p-l-20">
                                <ul class="nav">
                                    @if($profile)
                                        <li class="nav-item tab-all">
                                            <a class="nav-link active show" href="#project" data-toggle="tab">درباره
                                                من</a>
                                        </li>


                                        <li class="nav-item tab-all p-l-20">
                                            <a class="nav-link" href="/dashboard/profile/{{$user->profile->id}}/edit">ویرایش</a>
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
                                        <div class="header">
                                            <h2>درباره</h2>
                                        </div>
                                        <div class="body" id="profile">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>نام کامل</strong>
                                                    <br>
                                                    <p class="text-muted">{{$user->profile->first_name}}{{$user->profile->last_name}}</p>
                                                </div>


                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>استان</strong>
                                                    <br>
                                                    <p class="text-muted">{{$state->name}}</p>

                                                </div>

                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>شهر</strong>
                                                    <br>
                                                    <p class="text-muted">{{$city->name}}</p>
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
                        @else
                            <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="btn btn-success" data-toggle="modal"
                                           data-target="#userModal">تکمیل پروفایل</a>
                                    </div>
                                    <div class="modal fade" id="userModal" tabindex="-1"
                                         aria-labelledby="exampleModellable" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModallable">تکمیل پروفایل</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-lable="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>


                                                <div class="modal-body">

                                                    <form action="{{route('profile.store')}}" method="POST" id="profile"
                                                          enctype="multipart/form-data" class="myform">
                                                        @csrf

                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>نام :</strong>
                                                                <input type="text" name="first_name" id="first_name"
                                                                       class="form-control myinput" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>نام خانوادگی:</strong>
                                                                <input type="text" name="last_name" id="last_name"
                                                                       class="form-control myinput"
                                                                       placeholder="lastname">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>بیوگرافی:</strong>
                                                                <input type="text" name="biography" id="biography"
                                                                       class="form-control myinput"
                                                                       placeholder="biography">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>علاقه مندی:</strong>
                                                                <input type="text" name="favoraite" id="favoraite"
                                                                       class="form-control myinput"
                                                                       placeholder="favoraite">
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>عکس:</strong>
                                                                <input type="file" name="img" id="img"
                                                                       class="form-control" placeholder="image">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>استان:</strong>
                                                                <select class="form-control" name="province_id"
                                                                        id="province-drop">
                                                                    <option value="">انتخاب استان</option>
                                                                    @foreach($province as $provinces)
                                                                        <option
                                                                            value="{{$provinces->id}}">{{$provinces->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>شهر:</strong>
                                                                <select class="form-control" name="citie_id" id="city">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="mybtn">ثبت نام</button>
                                                        </div>
                                                    </form>
                                                    @endif
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
    <!-- Custom Js -->
    <script src="{{asset('/js/dashboard/admin.js')}}"></script>

    <script>

        $(document).ready(function () {

            $('#province-drop').on('change', function () {
                var province_id = this.value;
                $("#city").html('');
                $.ajax({
                    url: "/dashboard/profile/city",
                    type: "POST",
                    data: {
                        province_id: province_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.cities, function (key, value) {
                            $("#city").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>


@endpush

