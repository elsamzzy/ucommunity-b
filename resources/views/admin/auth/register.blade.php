@extends('layouts.auth.app')

@section('content')
    <div style="padding-top: 1em;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-4">
                        <h3 style="font-family: 'Comic Sans MS',serif ">Admin Register</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form class="mb-3" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group first">
                                    <label for="code">Staff Code</label>
                                    <input type="number" class="form-control @error('code') is-invalid @enderror" name="code" id="code" required value="{{ old('code') }}" autocomplete="off">
                                    @error('code')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @if(session('code'))
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group first">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" required value="{{ old('first_name') }}" autocomplete="off">
                                    @error('first_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" required  value="{{old('last_name')}}" id="last_name" autocomplete="off">
                                    @error('last_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" required  name="email" id="email" value="{{old('email')}}" autocomplete="off">
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="tel" class="form-control @error('mobile') is-invalid @enderror" required  name="mobile" autocomplete="off"  value="{{old('mobile')}}" id="mobile">
                                    @error('mobile')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-control" id="gender" required>
                                        <option></option>
                                        <option @if(old('gender') == 'male') selected @endif value="male">Male</option>
                                        <option @if(old('gender') == 'female') selected @endif value="female">Female</option>
                                    </select>
                                    @error('gender')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" value="{{old('dob')}}" required  name="dob" id="dob" autocomplete="off">
                                    @error('dob')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" required  name="address" value="{{old('dob')}}" id="address" autocomplete="off">
                                    @error('address')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control @error('state') is-invalid @enderror" required name="state" id="state" value="{{old('state')}}" autocomplete="off">
                                    @error('state')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" required  value="{{old('country')}}" name="country" autocomplete="off">
                                    @error('country')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" required  name="zip" value="{{old('zip')}}" autocomplete="off">
                                    @error('zip')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" required  name="password" autocomplete="off" id="password">
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group last mb-4">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="off" required  id="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                @if(session('error'))
                                    <div class="text-danger mb-3">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <input type="submit" value="Register" class="btn btn-block btn-primary">
                            </form>
                            <span class="ml-auto mt-3">Have an account? Login <a href="{{route('admin.login')}}" >Here</a></span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
