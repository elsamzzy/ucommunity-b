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
                                    <center><strong class="card-title text-light">{{ __('Transfer Pending') }}</strong></center>
                                </div>
                                <div class="card-body text-white bg-white">
                                    <center>
                                        <p class="card-text text-dark">{{ __('An email has been sent to you with the transaction information') }}
                                        </p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DATA TABLE-->
    </div>

@endsection
