@extends('layouts.logs')

@section('contents')
<div class="limiter">
    <div class="container-login100" style="background: url('{{ asset('img/image2.jpg') }}') center center; ">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="form-detail" action="{{ route('register') }}" method="post">
                @csrf
                <span class="login100-form-title p-b-33">
						 {{ __('Sign Up') }}
			    </span>
                <div class="wrap-input100 validate-input form-group @error('email') has-error @enderror">
                    <input type="text" name="email" class="form-control input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder = "Email Address">
                    @error('email')
                        <span class='help-block'>{{ $message }}</span>
                    @enderror
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 form-group @error('password') has-error @enderror">
                    <input type="password" name="password" class="form-control input100 @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                        <span class='help-block'>{{ $message }}</span>
                    @enderror
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="wrap-input100 form-group">
                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control input100" placeholder="Confirm Password">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div class="form-group container-login100-form-btn m-t-20">
                    <button class="login100-form-btn" type="submit">
                        {{ __('Submit') }}
                    </button>
                </div>
                <p> &nbsp; </p>
                <center><p>{{ __('Already have an account? ') }}<a href="{{ route('login') }}">{{ __('Login here') }}</a>.</p></center>
                <p> &nbsp; </p>
                <center><p>{{ __('Register as a staff? ') }}<a href="{{ route('admin.register') }}">{{ __('Register here') }}</a>.</p></center>
            </form>
        </div>
@endsection
