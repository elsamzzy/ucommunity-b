@extends('layouts.logs')

@section('contents')

    <div class="limiter">
        <div class="container-login100" style="background: url('{{ asset('img/image2.jpg') }}') center center; ">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class='form-detail' action = '{{ route('Personal Information') }}' method = 'POST' enctype='multipart/form-data'>
                    @csrf
                    <span class='login100-form-title p-b-33'>
                        {{ __('Personal Information') }}
                    </span>
                    <div class='wrap-input100 validate-input' data-validate='First name is required' required>
                        <input class='input100 @error('first_name') is-invalid @enderror' type='text' name='first_name' value="{{ old('first_name') }}" placeholder='First Name'>
                        @error('first_name')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='wrap-input100 validate-input' data-validate='Last name is required' required>
                        <input class='input100 @error('last_name') is-invalid @enderror' type='text' name='last_name' value="{{ old('last_name') }}" placeholder='Last Name'>
                        @error('last_name')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>

                    <div class='form-v11-content'>
                        <div class='form-detail'>
                            <div class='form-group validate-input' required>
                                <select name='gender'>
                                    <option value='Male'>{{ __('Male') }}</option>
                                    <option value='Female'>{{ __('Female') }}</option>
                                </select>
                                <span class='select-btn'>
                                    <i class='zmdi zmdi-chevron-down'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <p> &nbsp; </p>

                    <div class="form-group">
                        <div class="text-center">
							<span class="txt1">
								{{ __('Your passport photo: ') }}
							</span>
                        </div>
                        <input class="form-control form-control-lg @error('file') is-invalid @enderror" required type="file" name="file" id="file">
                        @if(session('image'))
                            <span class='help-block' style='color:red;'>{{ session('image') }}</span>
                        @endif
                        @error('file')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class='row'>
                        <div class='text-center p-t-30 p-r-58 p-b-4 p-l-17'>
                            <span class='txt1'>
                                {{ __('Date Of Birth: ') }}
                            </span>
                        </div>
                    <div class='text-right p-t-20 p-b-4'>
                        <input type='date' class='form-input @error('dob') is-invalid @enderror' id='dob' name='dob' placeholder='MM-DD-YYYY' value="{{ old('dob') }}" required/>
                        @error('dob')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                    <p> &nbsp; </p>

                    <div class='wrap-input100 validate-input' data-validate='Address is required' required>
                        <input class='input100 @error('address') is-invalid @enderror' type='text' name='address' placeholder='Address' value="{{ old('address') }}" >
                        @error('address')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='wrap-input100 validate-input'>
                        <input class='input100 @error('address_sec') is-invalid @enderror' type='text' name='address_sec' value="{{ old('address_sec') }}" placeholder='Second Address (optional)'>
                        @error('address_sec')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='wrap-input100 validate-input' data-validate='Zip Code is required' required>
                        <input class='input100 @error('zip') is-invalid @enderror' type='number' value="{{ old('zip') }}" name='zip' placeholder='Zip Code'>
                        @error('zip')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='wrap-input100 validate-input' data-validate='State/Province is required' required>
                        <input class='input100 @error('state') is-invalid @enderror' type='text' value="{{ old('state') }}" name='state' placeholder='State/province'>
                        @error('state')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='wrap-input100 validate-input' data-validate='Country is required' required>
                        <input class='input100 @error('country') is-invalid @enderror' value="{{ old('country') }}" type='text' name='country' placeholder='Country'>
                        @error('country')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='wrap-input100 validate-input' data-validate='Phone Number is required' required>
                        <input class='input100 @error('phone') is-invalid @enderror' value="{{ old('phone') }}" type='number' name='phone' placeholder='+1-1234-56789'>
                        @error('phone')
                            <span class='help-block' style='color:red;'>{{ $message }}</span>
                        @enderror
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                    <p> &nbsp; </p>
                    <div class='container-login100-form-btn m-t-20'>
                        <button class='login100-form-btn' type='submit'>
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
