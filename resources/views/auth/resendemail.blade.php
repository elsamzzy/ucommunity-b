@extends('layouts.auth.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="card text-center">
                            <div class="card-header bg-warning text-white">
                                Resend Activation Email
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Your account is not yet activated.</h5>
                                <p class="card-text">Click on <a href="{{route('resend.confirm')}}">Here</a> to resend activation email</p>
                                <button style="color: white" class="btn btn-primary" onclick="event.preventDefault();
                                                     document.getElementById('return-login').submit();">Return To Login</button>
                                <form id="return-login" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                United Community Bank
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
