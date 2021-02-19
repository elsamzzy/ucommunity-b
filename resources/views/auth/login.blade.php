@extends('layouts.logs')

@section('contents')
    <div class="limiter">
        <div class="container-login100" style="background: url('{{ asset('img/image3.png') }}') center center; ">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">

                <form class="form-detail" action="{{ route('login') }}" method="post">
                    @csrf
                    <span class="login100-form-title p-b-33">
                                 {{ __('Login') }}
                    </span>
                    @if(session('deactivate'))
                        <center><span class="help-block" style="color: red;"> {{ session('deactivate') }} </span></center>
                    @endif
                    <div class="wrap-input100 validate-input form-group">
                        <input type="text" name="email" class="form-control input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder = "Email Address">
                        @error('email')
                            <center><span class="help-block" style="color: red;"> {{ $message }} </span></center>
                        @enderror
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 form-group">
                        <input type="password" name="password" class="form-control input100 @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                            <center><span class="help-block" style="color: red;">{{ $message }}</span></center>
                        @enderror
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class="form-group container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="submit">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="text-center">
                        <span class="txt1">
                            {{ __('Create an account?') }}
                        </span>

                        <a href="{{ route('register') }}" class="txt2 hov1">
                            {{ __('Sign up') }}
                        </a>
                    </div>
                    <div class="text-center">
                        <span class="txt1">
                            {{ __('Staff Login?') }}
                        </span>

                        <a href="{{ route('admin.login') }}" class="txt2 hov1">
                            {{ __('Sign up') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
@endsection
