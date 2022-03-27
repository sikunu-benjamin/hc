<div id="popup_contact">
    <a class="button button_js" href="#"><i class="icon-mail-line"></i></a>
    <div class="popup_contact_wrapper">
        <h4>Envoyez-nous un message</h4>
        <div id="contactWrapper_popup">
            <form method="POST" action="{{ route('contact.post') }}">
                @csrf
                <div class="one-second">
                    <input placeholder="Nom complet" @error('name') style="background-color: #ff450073;" @enderror {{ old('name') }} type="text" required name="name" id="name" size="40" aria-required="true" aria-invalid="false" />

                </div>
                <div class="one-second">
                    <input placeholder="E-mail" @error('email') style="background-color: #ff450073;" @enderror value="{{ old('email') }}" type="email" required name="email" id="email" size="40" aria-required="true" aria-invalid="false" />

                </div>
                <div class="one-second">
                    <input placeholder="Numero de telephone" @error('phone') style="background-color: #ff450073;" @enderror value="{{ old('phone') }}" type="text" required name="phone" id="phone" size="40" aria-invalid="false" />

                </div>

                <div class="one-second">
                    <input placeholder="Subject" @error('subject') style="background-color: #ff450073;" @enderror value="{{ old('subject') }}" type="text" required name="subject" id="subject" size="40" aria-invalid="false" />

                </div>
                <div class="one">
                    <textarea placeholder="Message" @error('message') style="background-color: #ff450073;" @enderror required name="message" id="body" style="width:100%;" rows="10" aria-invalid="false">{{ old('message') }}</textarea>

                </div>
                <div class="one">
                    <button>Envoyer un message</button>
                </div>
            </form>
            <div id="confirmation_popup"></div>
        </div>

        <span class="arrow"></span>
    </div>
</div>