@extends('layouts.admin.dashboard.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-6 mb-4 mb-xl-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                                <h6 class="font-weight-normal mb-2">Last login was 23 hours ago.</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of all users</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Sn</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Registered When</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td><a href="{{route('admin.dashboard.eachuser', $user->id)}}">{{$x++}}</a></td>
                                                <td>{{$user->first_name}} {{$user->last_name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->created_at->diffForHumans()}}</td>
                                                <td>
                                                    @if($user->admin_active)
                                                        {{__('Active')}}
                                                    @else
                                                        {{__('Not Active')}}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
