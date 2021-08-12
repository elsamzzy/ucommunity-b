@component('mail::message')
Message received with the following information.

name: {{$name}} <br>
email: {{$email}} <br>
mobile: {{$mobile}} <br>
message: {{$message}} <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
