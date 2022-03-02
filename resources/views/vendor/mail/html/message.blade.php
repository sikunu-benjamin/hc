@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<!-- {{ config('app.name') }} -->
<img align="center" src="{{ asset('content/architect2/images/architect_2.png') }}" alt="hercule construction">
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
<div style="background-color: #fff; padding: 40px; text-align: center">
    <div style="margin-bottom: 20px">
        <a href="https://twitter.com/HerculeConstru1" style="display: inline-block; margin: 0px 10px">
            <img alt="twitter logo" src="{{ asset('img/social-icons/twitter.png') }}" style="width: 28px" />
        </a>
        <a href="https://www.facebook.com/herculeconstruction" style="display: inline-block; margin: 0px 10px">
            <img alt="facebook logo" src="{{ asset('img/social-icons/facebook.png') }}" style="width: 28px" />
        </a>
        <a href="#" style="display: inline-block; margin: 0px 10px">
            <img alt="linkedin logo" src="{{ asset('img/social-icons/linkedin.png') }}" style="width: 28px" />
        </a>
        <a href="https://www.instagram.com/herculeconstruction" style="display: inline-block; margin: 0px 10px">
            <img alt="instagram logo" src="{{ asset('img/social-icons/instagram.png') }}" style="width: 28px" />
        </a>
    </div>
    <div style="margin-bottom: 20px">
        <a href="{{ route('contact') }}" style="
              text-decoration: underline;
              font-size: 14px;
              letter-spacing: 1px;
              margin: 0px 15px;
              color: #261d1d;
            ">Nous contacter</a>
        <a href="#" style="
              text-decoration: underline;
              font-size: 14px;
              letter-spacing: 1px;
              margin: 0px 15px;
              color: #261d1d;
            ">Politique de confidentialité</a>
    </div>
    <div style="
            color: #a5a5a5;
            font-size: 12px;
            margin-bottom: 20px;
            padding: 0px 50px;
          ">
        Toutes les informations relatives au contenu de cet e-mail sont la propriété d'hercule construction.
    </div>
</div>
<br>
© {{ date("Y") }} {{ config("app.name") }}. @lang("All rights reserved.")

@endcomponent
@endslot
@endcomponent