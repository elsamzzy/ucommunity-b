@extends('layouts.app')

@section('content')
    <div style="margin: 10% 10%">
        <div class="justify-content-center">
            <h3>{{ __('Change password') }}</h3>
        </div>
        <div class="align-items-center">
            @if(session('pass'))
                <span class='help-block' style='color:greenyellow;'>{{ session('pass') }}</span>
            @endif
            <form class="form-control " action="{{ route('admin.settings') }}" method="post">
                @csrf
                <label for="old-password">Current Password:
                    <input class="form-control input100" type="password" name="old-password" placeholder="Current Password"/>
                </label></br>
                @if(session('pass_error'))
                    <span class='help-block' style='color:red;'>{{ session('pass_error') }}</span></br>
                @endif
                <label for="password">New Password:
                    <input class="form-control input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="New Password"/>
                </label></br>
                @error('password')
                    <span class='help-block' style='color:red;'>{{ $message }}</span></br>
                @enderror
                <label for="password">Confirm Password:
                    <input class="form-control input100" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password"/>
                </label></br>
                <button class=" btn btn-primary justify-content-center" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
