<x-guest-layout>
    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('assets/img/create-account-office.jpeg') }}" alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('assets/img/create-account-office-dark.jpeg') }}" alt="Office" />
    </div>

    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </h1>

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-button>
                        {{ __('Confirm') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>