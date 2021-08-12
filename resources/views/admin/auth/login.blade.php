@extends('layouts.auth.app')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Admin Sign In</h3>
                            </div>
                            <form class="mb-3" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="email" autocomplete="off">
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" autocomplete="off">
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <!--
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                    -->
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                                @if(session('error'))
                                    <div class="text-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </form>
                            <span class="ml-auto mt-3">Register for an account <a href="{{route('admin.register')}}" >Here</a></span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
