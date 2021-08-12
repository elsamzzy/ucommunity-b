@extends('layouts.auth.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="card text-center">
                            <div class="card-header bg-primary text-white">
                                Successfully Uploaded ID!
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">You have successfully uploaded your ID</h5>
                                <p class="card-text">You account will be activated as soon as one of our account officers has gone through your ID</p>
                                <button style="color: white" class="btn btn-primary"  onclick="event.preventDefault();
                                                     document.getElementById('return-login').submit();">Login</button>
                                <form action="{{route('resend')}}" id="return-login" method="POST" class="d-none">
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
