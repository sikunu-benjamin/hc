@component('mail::message')
# Hercule Construction Message depuis le formulaire contact

Sujet : {{ $message_details->subject }} <br>
Nom : {{ $message_details->name }}<br>
Téléphone : {{ $message_details->phone }}<br>
E-mail : {{ $message_details->email }}<br><br>
<hr>
Message : {{ $message_details->message }}

voici son message
{{ $message_details->message }}


Merci beaucoup,<br>
{{ config('app.name') }}
@endcomponent