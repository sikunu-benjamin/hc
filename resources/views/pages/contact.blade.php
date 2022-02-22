@extends('layouts.layout')

@section('title')
| Page de contact
@endsection

@section('header_partials')

<div id="Subheader" style="padding:80px 0;">
    <div class="container">
        <div class="column one">
            <h1 class="title">En contact avec nous</h1>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="section mcb-section" style="padding-top:0px; padding-bottom:20px; ">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one  valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_divider ">
                    <hr style="margin: 0 auto 70px;" />
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-second  valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  ">
                    <div class="column_attr">
                        @if(session()->has('success'))
                        <hr class="no_line" style="margin: 0 auto 30px;" />

                        <h4 style="color: #0ab20aad;">{{ session()->get('success') }}</h4>

                        @else

                        <h3>Envoie-nous un message</h3>
                        <hr class="no_line" style="margin: 0 auto 30px;" />
                        @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li style="text-decoration: none; list-style: circle; color: orangered">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div id="contactWrapper">
                            <form method="POST" action="{{ route('contact.post') }}">
                                @csrf
                                <div class="column one-second">
                                    <input placeholder="Nom complet" @error('name') style="background-color: #ff450073;" @enderror {{ old('name') }} type="text" required name="name" id="name" size="40" aria-required="true" aria-invalid="false" />

                                </div>
                                <div class="column one-second">
                                    <input placeholder="E-mail" @error('email') style="background-color: #ff450073;" @enderror value="{{ old('email') }}" type="email" required name="email" id="email" size="40" aria-required="true" aria-invalid="false" />

                                </div>
                                <div class="column one-second">
                                    <input placeholder="Numero de telephone" @error('phone') style="background-color: #ff450073;" @enderror value="{{ old('phone') }}" type="text" required name="phone" id="phone" size="40" aria-invalid="false" />

                                </div>

                                <div class="column one-second">
                                    <input placeholder="Subject" @error('subject') style="background-color: #ff450073;" @enderror value="{{ old('subject') }}" type="text" required name="subject" id="subject" size="40" aria-invalid="false" />

                                </div>
                                <div class="column one">
                                    <textarea placeholder="Message" @error('message') style="background-color: #ff450073;" @enderror required name="message" id="body" style="width:100%;" rows="10" aria-invalid="false">{{ old('message') }}</textarea>

                                </div>
                                <div class="column one">
                                    <button>Envoyer un message</button>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-second  valign-top clearfix" style="padding:0 0 0 5%">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  ">
                    <div class="column_attr" style=" background-image:url({{ asset('content/architect2/images/home_architect2_contact_icon1.png') }}); background-repeat:no-repeat; background-position:left top; padding:0 0 0 80px;">
                        <p style="margin-bottom: 7px;">
                            telephone: <span class="themecolor">+243 897 106 211</span>
                        </p>
                        <p style="margin-bottom: 7px;">
                            telephone: <span class="themecolor">+243 896 162 935</span>
                        </p>
                        <p>
                            e-mail: <a href="mailto:contact@herculeconstruction.com">contact@herculeconstruction.com</a>
                        </p>
                    </div>
                </div>
                <div class="column mcb-column one column_column  ">
                    <div class="column_attr" style=" background-image:url({{ asset('content/architect2/images/home_architect2_contact_icon2.png') }}); background-repeat:no-repeat; background-position:left top; padding:0 30% 0 80px;">
                        <h6>Notre ambition est que les travaux qui se passent bien soient la norme.</h6>
                        <p>
                            Nous sommes une entreprise œuvrant dans le secteur de construction en République démocratique du Congo.
                        </p>
                        <p>
                            RDC
                            <br> Kasa-vubu, 23 Inkisi
                            <br> Kinshasa, kongo-central
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection