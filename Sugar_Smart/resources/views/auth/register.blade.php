<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">{{ __('Register Account') }}</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Username')" />
                <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-[#FF2D20] focus:ring focus:ring-[#FF2D20]/50"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-[#FF2D20] focus:ring focus:ring-[#FF2D20]/50"
                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" /> <!-- Ini menampilkan error email -->
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-[#FF2D20] focus:ring focus:ring-[#FF2D20]/50"
                    type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-[#FF2D20] focus:ring focus:ring-[#FF2D20]/50"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="underline text-sm text-gray-600 hover:text-[#FF2D20] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20]" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4 bg-[#FF2D20] hover:bg-[#FF2D20]/80 text-white">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
