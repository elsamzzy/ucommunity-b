@component('mail::message')
{{auth()->guard()->user()->first_name}} {{auth()->guard()->user()->last_name}} Sent you a message with the following body:

{{$message}}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
