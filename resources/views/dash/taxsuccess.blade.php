@extends('layouts.app')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->

        <!-- DATA TABLE-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <center><strong class="card-title text-light">{{ __('Code was correct!!!') }}</strong></center>
                                </div>
                                <div class="card-body text-white bg-white">
                                    <center>
                                        <p class="card-text text-dark">{{ __('Thank you for contacting support. Please procced') }}
                                        </p>
                                    </center>
                                </div>
                                <center>
                                    <a href ="{{ route('transcode') }}"><button class="au-btn au-btn--block au-btn--green m-b-20 m-r-250 m-l-250">{{ __('Continue >>') }}</button></a>
                                    <center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DATA TABLE-->
    </div>
@endsection
