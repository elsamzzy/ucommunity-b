@extends('layouts.logs')

@section('contents')
    <div class="limiter">
        <div class="container-login100" style="background: url('{{ asset('img/image2.jpg') }}') center center; ">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						{{ __('Welcome') }}
					</span>
                    <div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							{{ __('You successfully registered as a staff') }}
						</span>
                        <p> &nbsp; </p>
                        <span class="txt1">
							{{ __('Click here to go to the dashboard.') }}
						</span>
                        <a href="{{ route('dashboard') }}" class="txt2 hov1">
                            {{ __('Here') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
