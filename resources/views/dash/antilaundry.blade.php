@extends('layouts.app')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">{{ __('You are here:') }}</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        {{ __('Home') }}
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>{{ __('/') }}</span>
                                    </li>
                                    <li class="list-inline-item">{{ __('Anti-Laundering Code') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DATA TABLE-->
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{ asset('img/icons/logo-white.png') }}" alt="Ziraatbankasi">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('antilaundry') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="code">{{{ __('Anti-Laundering Code') }}}</label>
                                <input class="au-input au-input--full @error('code') is-invalid @enderror" type="text" name="code" value="{{ old('code') }}" placeholder="Your Anti-Laundering Code" required>
                                @if(session('code'))
                                    <span class='help-block' style='color:red;'>{{ session('code') }}</span>
                                @endif
                                @error('code')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <center>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Continue') }}</button>
                                <center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DATA TABLE-->
    </div>

@endsection
