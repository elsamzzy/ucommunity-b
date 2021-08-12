@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row mt-4">
                    <div class="col-lg-9 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Send us a message</h4>
                                <form class="forms-sample" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" value="{{$user->first_name}} {{$user->last_name}}" readonly disabled id="exampleInputName1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" value="{{$user->email}}" disabled id="exampleInputEmail3" readonly placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" required id="exampleTextarea1" rows="4">{{old('message')}}</textarea>
                                        @error('message')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    @if(session('error'))
                                        <div class="mt-1 text-danger">
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    @if(session('message'))
                                        <div class="mt-1 text-success">
                                            {{session('message')}}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="card-title">Contact us</h4>
                                <h4>Email: <small class="text-muted">support@u-communityb.com</small></h4>
                                <h4 class="mt-1">Mobile: <small class="text-muted">+1-234-5678</small></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="footer-wrap">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © U-Community B 2020</span>
                        <!--
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
