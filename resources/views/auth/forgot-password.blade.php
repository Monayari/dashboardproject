@extends('auth.master')
@section('pagetitle', 'forgotpaassword')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-45">
                        بازیابی رمز عبور
                    </span>

                    <span class="error-subheader2 p-t-20 p-b-15">
                        آدرس ایمیل ثبت شده خود را وارد کنید.
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="ایمیل معتبر مورد نیاز است: ex@abc.xyz">
                        <x-jet-input class="input100" id="email" type="email" name="email" :value="old('email')"
                            required autofocus />
                        <span class="focus-input100"></span>
                        <span class="label-input100">ایمیل</span>
                    </div>

                    <div class="container-login100-form-btn p-t-30">
                        <button class="login100-form-btn">
                            تنظیم مجدد رمز عبور من
                        </button>
                    </div>

                    <div class="w-full p-t-25 text-center">

                        <div>
                            <a href="{{ route('login') }}" class="txt1">
                                ورود?
                            </a>
                        </div>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url(&#x27;/images/dashboard/bg-02.png&#x27;);">
                </div>
            </div>
        </div>
    </div>


@endsection
