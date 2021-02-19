@component('mail::message')
# Your Transfer was successful

Your transfer to the following bank details below was successful and will be completed in 2 working days.
{{ __('Destination Bank Name: ') }} {{ $bank_name }}
{{ __('Destination Bank Branch: ') }} {{ $bank_branch }}
{{ __('Destination Bank City: ') }} {{ $bank_city }}
{{ __('Destination Bank iban/Swift Code: ') }} {{ $bank_code }}
{{ __('Destination Account Name Holder: ') }} {{ $account_name }}
{{ __('Destination Account Number: ') }} {{ $account_number }}
{{ __('Amount: $') }} {{ $amount }}

{{ __('Please contact support for any assistance') }}
@component('mail::button', ['url' => route('support') ])
Contact Support
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
