<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/zadanie-final">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('auth.name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('auth.email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="username" :value="__('auth.username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('auth.password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('auth.confirm_password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
            </div>

            <div class="flex flex-col items-center justify-center mt-4">
            <x-button>
                    {{ __('auth.register') }}
                </x-button>

                <a class="underline text-sm text-gray-600 hover:text-gray-900 mt-3" href="{{ route('login') }}">
                    {{ __('auth.already_registered') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>