@extends('layouts.auth.default')
@section('content')

    <div class="card-body login-card-body">
        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('To complete setup and log in, click the verification link in the email.') }}
                    {{ __('If you did not receive the email click below') }}<br>
                    <hr><a href="{{ route('verification.resend') }}">{{ __('Resend verification email') }}</a>.
                </div>
    </div> 

@endsection 