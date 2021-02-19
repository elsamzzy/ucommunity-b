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
                                <span class="au-breadcrumb-span">{{ __('You are here: ') }}</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        {{ __('Home') }}
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>{{ __('/') }}</span>
                                    </li>
                                    <li class="list-inline-item">{{ __('Dashboard') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">{{ __('Welcome back!') }}
                            <span>{{ $user->name() }}</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- STATISTIC-->
        <section id="balance" class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="statistic__item statistic__item--green">
                            <h2 class="number">{{ $online }}</h2>
                            <span class="desc">{{ __('Members online') }}</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="statistic__item statistic__item--blue">
                            <h2 class="number">{{ auth()->user()->transactions }}</h2>
                            <span class="desc">{{ __('Recent transactions') }}</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="statistic__item statistic__item--red">
                            <h2 class="number">{{ auth()->user()->balance }}</h2>
                            <span class="desc">{{ __('Balance') }}</span>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC-->
        <!-- DATA TABLE-->
        <section id="account" class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">{{ __('Account Details') }}</h3>
                        <div class="table-responsive table-responsive-data2">
                            <div class="col-md-4 pull-left">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">

                                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="{{ __('user2021') }}{{ auth()->user()->id }}" src="{{ $user->pics() }}">

                                                <div class="media-body">
                                                    <h2 class="text-light display-6">{{ $user->name() }}</h2>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <i class="zmdi zmdi-account"></i>{{ __('Account Number') }}
                                                <span class="badge badge-primary pull-right">{{ __('60395621') }}{{ auth()->user()->id }}</span>
                                            </li>
                                            <li class="list-group-item">

                                                <i class="fa fa-tasks"></i>{{ __('Transactions') }}
                                                <span class="badge badge-danger pull-right"> {{ $transactions->total() }}</span>

                                            </li>
                                        </ul>

                                    </section>
                                </aside>
                            </div>
                            <div class="col-md-8 pull-right">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">{{ __('Personal Information') }}</strong>
                                    </div>

                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('First Name:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->first_name }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Last Name:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->last_name }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Date Of Birth:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->dob }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Gender:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->gender  }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Address:') }} </h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->address }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Address 2:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->address_sec }} </p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('State/Provinces:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p> {{ auth()->user()->state }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Zip:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p>{{ auth()->user()->zip }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Country:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p>{{ auth()->user()->country }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('Phone Number:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p>{{ auth()->user()->phone }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                            <div class="row">
                                                <div class="col-md-6 pull-left">
                                                    <h4 class="pb-2 display-5">{{ __('email:') }}</h4>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <p>{{ auth()->user()->email }}</p>
                                                </div>
                                            </div>
                                            <p> &nbsp; </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
    </div>
@endsection
