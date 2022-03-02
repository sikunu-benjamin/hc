@component('mail::message')

-Sujet : {{ $message_details->subject }} <br>
-Nom : {{ $message_details->name }}<br>
-Téléphone : {{ $message_details->phone }}<br>
-E-mail : {{ $message_details->email }}<br><br>
<hr>

# voici le message <br>
{{ $message_details->message }}

<br>
Merci beaucoup,<br>
{{ config('app.name') }}
@endcomponent