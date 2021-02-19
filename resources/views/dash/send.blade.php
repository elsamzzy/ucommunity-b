@extends('layouts.app')

@section('content')
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">{{ __('You are here:') }}</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        {{ __('Home') }}
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>{{ __('/') }}</span>
                                    </li>
                                    <li class="list-inline-item">{{ __('Transfer') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DATA TABLE-->
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="JavaScript:void(0)">
                            <img src="{{ asset('img/icons/logo-white.png') }}" alt="Ziraatbankasi">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('send') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>{{ __('Destination Bank Name') }}</label>
                                <input class="au-input au-input--full @error('destination_bank_name') is-invalid @enderror" type="text" name="destination_bank_name" value="{{ old('destination_bank_name') }}" placeholder="Destination Bank Name" required>
                                @error('destination_bank_name')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Destination Bank Branch') }}</label>
                                <input class="au-input au-input--full @error('destination_bank_branch') is-invalid @enderror" type="text" name="destination_bank_branch" value="{{ old('destination_bank_branch') }}" placeholder="Destination Bank Branch" required>
                                @error('destination_bank_branch')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Destination Bank City') }}</label>
                                <input class="au-input au-input--full @error('destination_bank_city') is-invalid @enderror" type="text" name="destination_bank_city" value="{{ old('destination_bank_city') }}" placeholder="Destination Bank City" required>
                                @error('destination_bank_city')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Destination Bank iban/Swift Code') }}</label>
                                <input class="au-input au-input--full @error('destination_bank_iban_swift_code') is-invalid @enderror" type="number" name="destination_bank_iban_swift_code" value="{{ old('destination_bank_iban_swift_code') }}" placeholder="Destination Bank iban/Swift Code" required>
                                @error('destination_bank_iban_swift_code')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Destination Account Name/Holder') }}</label>
                                <input class="au-input au-input--full @error('destination_account_name_holder') is-invalid @enderror" type="text" name="destination_account_name_holder" value="{{ old('destination_account_name_holder') }}" placeholder="Destination Account Name/Holder" required>
                                @error('destination_account_name_holder')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Destination Account Number') }}</label>
                                <input class="au-input au-input--full @error('destination_account_number') is-invalid @enderror" type="number" name="destination_account_number" value="{{ old('destination_account_number') }}" placeholder="Destination Account Number" required>
                                @error('destination_account_number')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Amount') }}</label>
                                <input class="au-input au-input--full @error('amount') is-invalid @enderror" type="number" name="amount" placeholder="Amount" value="{{ old('amount') }}" required>
                                @error('amount')
                                    <span class='help-block' style='color:red;'>{{ $message }}</span>
                                @enderror
                            </div>
                            <center>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Transfer') }}</button>
                                <center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- END DATA TABLE-->
    </div>
@endsection
