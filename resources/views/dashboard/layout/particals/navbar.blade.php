<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="index_7.html">

                <img src="{{asset('/images/dashboard/logo.png')}}" alt>
                <span class="logo-name">آتریو</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i class="nav-hdr-btn ti-align-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="nav-hdr-btn ti-fullscreen"></i>
                    </a>

                </li>

                <!-- #END# Full Screen Button -->
                <!-- #START# Notifications-->
                <li class="dropdown">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="nav-hdr-btn ti-bell"></i>
                        <span class="notify"></span>
                        <span class="heartbeat"></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">اطلاعیه ها</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user1.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 14 دقیقه پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user2.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 22 دقیقه پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user3.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 3 ساعت پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user4.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 3 ساعت پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user5.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 3 ساعت پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user6.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 3 ساعت پیش
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <span class="table-img msg-user">
                                            <img src="{{asset('/images/dashboard/user7.jpg')}}" alt>
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">آرش خادملو</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> دیروز
                                            </span>
                                            <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#" onClick="return false;">مشاهده تمام اطلاعیه ها</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications-->
                <li class="dropdown user_profile">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('/images/dashboard/user.jpg')}}" alt>
                    </div>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
{{--
                                    <a href="#" onClick="return false;">
{{--
{{--                                        <a href="{{route('dashboard.profile.index')}}" onClick="return true;">--}}
{{--
                                            <i class="material-icons">person</i>پروفایل
                                        </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">feedback</i>بازخورد
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">help</i>راهنما
                                    </a>
                                </li>
                                <li>

                                <!-- <form  method="post" action="{{route('logout') }}">
                                @csrf -->
                                    <a onClick="logout()">

                                        <i class="material-icons">power_settings_new</i>
                                        خروج
                                    </a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                        <i class="nav-hdr-btn ti-layout-grid2"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script>

    function logout() {
        $.ajax({

            type: 'POST',
            url: "{{route('logout')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },


            data: {

                _token: $('meta[name="csrf-token"]').attr('content'),

                success: function (response) {
                    window.location.href = "{{route('index')}}";

                }
            }
        });
    }
</script>
