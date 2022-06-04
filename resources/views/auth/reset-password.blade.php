@extends('auth.master')
@section('pagetitle', 'reset-password')
@section('content')


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <span class="login100-form-title p-b-45">
                        بازیابی رمز عبور
                    </span>



                    <div class="wrap-input100 validate-input" data-validate="آدرس ایمیل معتبر وارد کنید">
                        <x-jet-input class="input100" id="email" type="email" name="email"
                            :value="old('email', $request->email)" required autofocus />
                        <span class="focus-input100"></span>
                        <span class="label-input100">ایمیل</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
                        <x-jet-input class="input100" id="password" type="password" name="password" required
                            autocomplete="new-password" />
                        <span class="focus-input100"></span>
                        <span class="label-input100">رمزعبور</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
                        <x-jet-input class="input100" id="password_confirmation" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <span class="focus-input100"></span>
                        <span class="label-input100">تایید رمز عبور</span>
                    </div>




                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            ثبت نام
                        </button>
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

                <div class="login100-more" style="background-image: url(&#x27;/images/dashboard/bg-02.png&#x27;);">
                </div>
            </div>
        </div>
    </div>


@endsection
