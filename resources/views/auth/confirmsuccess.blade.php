@extends('layouts.auth.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="card text-center">
                            <div class="card-header bg-primary text-white">
                                Success!
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">You have successfully activated your account</h5>
                                <a @if($user == 'user') href='{{route('login')}}' @elseif($user == 'admin') href='{{route('admin.login')}}' @endif>
                                    <button style="color: white" class="btn btn-primary" onclick="">Return back to Login</button>
                                </a>
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
