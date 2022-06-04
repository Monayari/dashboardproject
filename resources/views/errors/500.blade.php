@extends('auth.master')
@section('pagetitle', '500')
@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form" method="POST" action="{{ route('index') }}">
                    <span class="error-header p-b-45">
                        500
                    </span>
                    <span class="error-subheader2 p-b-5">
                        اوه، چیزی اشتباه رفت لطفا چند بار امتحان کنید.
                    </span>

                    <div class="container-login100-form-btn p-t-30	">
                        <button class="login100-form-btn">
                            برو به صفحه اصلی
                        </button>
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
