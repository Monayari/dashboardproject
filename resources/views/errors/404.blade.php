@extends('auth.master')
@section('pagetitle', '404')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form" >
                    <span class="error-header p-b-45">
                        404
                    </span>
                    <span class="error-subheader p-b-5">
                        به نظر می رسد که شما از دست داده اید
                    </span>
                    <span class="error-subheader2 p-b-5">
                        صفحه ای که به دنبال آن هستید در دسترس نیست!
                    </span>

                    <div class="container-login100-form-btn p-t-30	">
                        <a class="login100-form-btn" href="javascript:history.back()">
                            برو به صفحه اصلی
                        </a>
                    </div>

                    <div class="w-full p-t-15 p-b-15 text-center">

                        <div>
                            <a href="#" class="txt1">
                                آیا نیازمند کمک هستید؟
                            </a>
                        </div>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url(&#x27;images/bg-03.png&#x27;);">
                </div>
            </div>
        </div>
    </div>



@endsection
