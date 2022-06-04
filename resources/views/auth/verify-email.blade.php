@extends('auth.master')
@section('pagetitle', 'locked')
@section('content')

    <div class="text-center">
        <p class="txt1 p-b-20">
            از ثبت نام شما سپاسگزاریم! قبل از شروع آیا می توانید آدرس ایمیل خود را با کلیک بر روی پیوندی که به تازگی برای
            شما ایمیل کرده ایم تأیید کنید؟ اگر ایمیلی را دریافت نکردید، ایمیل دیگری برای شما ارسال میکنیم
        </p>
    </div>


    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            ارسال مجدد ایمیل تایید
                        </button>
                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            خروج
                        </button>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url(&#x27;/images/dashboard/bg-01.png&#x27;);">
                </div>
            </div>
        </div>
    </div>
@endsection
