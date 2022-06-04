@extends('auth.master')
@section('pagetitle', 'sign-in')
@section('content')


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-45">
                    ورود
                </span>


                <div class="wrap-input100 validate-input @error('email') is-invalid @enderror" data-validate="Valid email is required: ex@abc.xyz">
                    <x-jet-input class="input100" id="email" type="email" name="email" :value="old('email')" required autofocus />
                    <span class="focus-input100"></span>
                    <span class="label-input100">ایمیل</span>
                    @error('email')
                    <strong class="text-danger">
                        {{ $message}}
                    </strong>
                    @enderror
                </div>


                <div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
                    <x-jet-input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" />
                    <span class="focus-input100"></span>
                    <span class="label-input100">رمزعبور</span>
                    @error('password')
                    <strong class="text-danger">
                        {{ $message}}
                    </strong>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-t-15 p-b-20">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value> مرا به خاطر بسپار
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>

                    <div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="txt1">
                            رمز عبور را فراموش کردید؟
                        </a>
                        @endif
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        ورود
                    </button>
                </div>

                <div class="text-center p-t-45 p-b-20">
                    <span class="txt2">
                       <a href="{{route('register')}}">یا با استفاده از ثبت نام</a>   
                    </span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more">
            </div>
        </div>
    </div>
</div>


@endsection
