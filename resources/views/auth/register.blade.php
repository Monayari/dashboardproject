@extends('auth.master')
@section('pagetitle', 'sign-up')
@section('content')

<x-jet-validation-errors class="mb-4" />
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-45">
                    ثبت نام
                </span>

                <div class="wrap-input100 validate-input" data-validate="نام کاربری مورد نیاز است">
                    <x-jet-input class="input100" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <span class="focus-input100"></span>
                    <span class="label-input100">نام کاربری</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="آدرس ایمیل معتبر وارد کنید">
                    <x-jet-input class="input100" id="email" type="email" name="email" :value="old('email')" required />
                    <span class="focus-input100"></span>
                    <span class="label-input100">ایمیل</span>
                </div>





                <div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
                    <x-jet-input class="input100" id="password" type="password" name="password" required autocomplete="new-password" />
                    <span class="focus-input100"></span>
                    <span class="label-input100">رمزعبور</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
                    <x-jet-input class="input100" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <span class="focus-input100"></span>
                    <span class="label-input100">تایید رمز عبور</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="شماره تماس را وارد کنید">
                    <x-jet-input class="input100" id="phone" type="text" name="phone_number" :value="old('phone')" required />
                    <span class="focus-input100"></span>
                    <span class="label-input100">شماره تماس</span>
                </div>

                <!-- <div class="wrap-input100 validate-input" data-validate="نوع کاربری را وارد کنید">

                    <select name="role" class="input100">
                        <option value="modir">modir</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                        <option value="architect">architect</option>
                    </select>

                    <span class="focus-input100"></span>
                    <span class="label-input100">نوع کاربری</span>
                </div> -->
                <div class="flex-sb-m w-full p-t-15 p-b-20">

                    <div>
                        <a href="{{ route('login') }}" class="txt1">
                            قبلا ثبت نام کرده اید؟

                        </a>

                    </div>

                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        ثبت نام
                    </button>
                </div>

                <div class="text-center p-t-45 p-b-20">
                    <span class="txt2">
                        یا با استفاده از ثبت نام
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

            <div class="login100-more" style="background-image: url(&#x27;/images/dashboard/bg-02.png&#x27;);">
            </div>
        </div>
    </div>
</div>


@endsection
