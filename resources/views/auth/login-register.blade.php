@extends('auth.master')
@section('pagetitle', 'login')
@section('content')

    <body class="light rtl">
        <div class="loginmain">
            <div class="loginCard">
                <div class="login-btn splits">
                    <p>در حال حاضر یک کاربر؟</p>
                    <button class="active">ورود</button>
                </div>
                <div class="rgstr-btn splits">
                    <p>حساب کاربری ندارید؟</p>
                    <button>ثبت نام</button>
                </div>
                <div class="wrapper">
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="login" tabindex="500" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3>ورود</h3>
                        <div class="mail">
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus />
                            <label>ایمیل یا نام کاربری</label>
                        </div>
                        <div class="passwd">
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                            <label>رمزعبور</label>
                        </div>
                        <div class="text-right p-t-8 p-b-31">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    رمز عبور را فراموش کرده اید؟
                                </a>
                            @endif
                        </div>
                        <div class="submit">
                            <button class="dark">ورود</button>
                        </div>
                        <div class="flex-c p-b-112">
                            <a href="#" class="login100-social-item bg-fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="login100-social-item bg-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="login100-social-item bg-google">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                    </form>
                    <x-jet-validation-errors class="mb-4" />
                    <form id="register" tabindex="502" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3>ثبت نام</h3>
                        <div class="name">
                            <x-jet-input class="input100" id="name" type="text" name="name" :value="old('name')"
                                required autofocus autocomplete="name" />
                            <label>نام</label>
                        </div>
                        <div class="mail">
                            <x-jet-input class="input100" id="email" type="email" name="email" :value="old('email')"
                                required />
                            <label>ایمیل</label>
                        </div>

                        <div class="passwd">
                            <x-jet-input class="input100" id="password" type="password" name="password" required
                                autocomplete="new-password" />
                            <label>رمزعبور</label>
                        </div>
                        <div class="passwd">
                            <x-jet-input class="input100" id="password_confirmation" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <label>تایید رمز عبور</label>
                        </div>
                        <div class="submit">
                            <button class="dark">ثبت نام</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @section('js')
        <script src="{{ asset('/js/dashboard/login-register.js') }}"></script>
    @endsection
@endsection
