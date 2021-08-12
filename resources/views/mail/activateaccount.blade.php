@component('mail::message')
Confirm Account

Please confirm your account

@component('mail::button', ['url' => $url])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
