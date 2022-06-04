@extends('auth.master')
@section('pagetitle', 'forgotpaassword')
@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf



                    <div class="wrap-input100 validate-input" data-validate="��� ���� ���� ���� ���">
                        <x-jet-input id="password" class="input100" type="password" name="password" required
                            autocomplete="current-password" autofocus />
                        <span class="focus-input100"></span>
                        <span class="label-input100">�������</span>
                    </div>

                    <div class="container-login100-form-btn p-t-30">
                        <button class="login100-form-btn">
                            ���
                        </button>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url(&#x27;/images/dashboard/bg-01.png&#x27;);">
                </div>
            </div>
        </div>
    </div>


@endsection
