<x-guest-layout>

    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('assets/img/login-office.jpeg') }}" alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('assets/img/login-office-dark.jpeg') }}" alt="Office" />
    </div>


    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Se connecter à hercule construction
            </h1>

            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="block text-sm">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="block mt-4 text-sm">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full" placeholder="***************" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="text-sm ml-2 font-medium text-purple-600 dark:text-purple-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <x-button>
                    Connexion
                </x-button>

                <hr class="my-8" />
                <p class="mt-4">
                    @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </p>
                <p class="mt-1">
                    <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('register') }}">
                        Create account
                    </a>
                </p>
            </form>
        </div>
    </div>

</x-guest-layout>