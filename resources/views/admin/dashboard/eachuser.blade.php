@extends('layouts.admin.dashboard.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row mt-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">User Information</h4>
                                <form class="form-sample">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">First Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" disabled readonly value="{{$user->first_name}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Last Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" disabled readonly value="{{$user->last_name}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Gender</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" disabled readonly="">
                                                        <option @if($user->gender == 'male') selected @endif>Male</option>
                                                        <option @if($user->gender == 'female') selected @endif>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" placeholder="dd/mm/yyyy" disabled readonly value="{{$user->dob}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  disabled readonly value="{{$user->address}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">State</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  disabled readonly value="{{$user->state}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Zip / Postcode</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"  disabled readonly value="{{$user->zip}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Country</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" disabled readonly value="{{$user->country}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                @if($user->admin_active)
                                    <button class="btn btn-danger" type="button" onclick="event.preventDefault();
                                                     document.getElementById('change-user').submit();">Disable User</button>
                                @else
                                    <button class="btn btn-primary" type="button" onclick="event.preventDefault();
                                                     document.getElementById('change-user').submit();">Enable User</button>
                                @endif

                                @if(session('error'))
                                    <div class="row mt-1">
                                        <div class="col-md-6 text-danger">
                                            {{session('error')}}
                                        </div>
                                    </div>
                                    @elseif(session('message'))
                                        <div class="row mt-1">
                                            <div class="col-md-6 text-success">
                                                {{session('message')}}
                                            </div>
                                        </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <form id="change-user" method="POST" class="d-none">
                    @csrf
                </form>
                <div class="row mt-4 justify-content-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">User's Identity</h4>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Type Of Identity: </label>
                                        <div class="col-sm-9">
                                            <input disabled readonly type="text" class="form-control" value="{{$user->identity_type ?? "Not Yet Selected by user"}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('id') }}{{ __('/') }}{{$user->id}}{{$user->picture_format}}" alt="user's proof">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center text-center">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Change User Balance</h4>
                                <form method="post" action="{{route('admin.dashboard.eachuser.balance', $user->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group row">
                                                <label for="balance" class="col-sm-3 col-form-label">Balance: </label>
                                                <div class="col-sm-9">
                                                    <input name="balance" id="balance" type="text" class="form-control" value="${{$user->balance}}" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            @if(session('messagebalance'))
                                                <div class="row">
                                                    <div class="col-md-12 text-center text-success">
                                                        {{session('messagebalance')}}
                                                    </div>
                                                </div>
                                            @elseif(session('errorbalance'))
                                                <div class="row">
                                                    <div class="col-md-12 text-center text-danger">
                                                        {{session('errorbalance')}}
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </form>
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
