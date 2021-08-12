@extends('layouts.auth.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="card text-center">
                            <div class="card-header bg-primary text-white">
                                Personal Indentity Verification Required!
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">You need to verify your account below</h5>
                                <form method="post" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="form-group first">
                                        <label for="type">Select Personal ID</label>
                                        <select name="type" class="form-control" id="type" required>
                                            <option></option>
                                            <option @if(old('type') == 'passport') selected @endif value="passport">Passport</option>
                                            <option @if(old('type') == 'driver_licence') selected @endif value="driver_licence">Driver's Licence</option>
                                            <option @if(old('type') == 'national_identity') selected @endif value="national_identity">National Identity</option>
                                        </select>
                                        @error('type')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group first">
                                        <label for="type">Upload your ID</label>
                                        <input type="file" name="document" required id="document" class="form-control @error('document') is-invalid @enderror" accept=".jpeg,.jpg,.png" />
                                        @error('document')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                        @if(session('document'))
                                            <div class="text-danger">
                                                {{session('document')}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group first">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    @if(session('error'))
                                        <div class="text-danger mt-1">
                                            {{session('error')}}
                                        </div>
                                    @endif
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
