<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-30 h-30 fill-current text-blue-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="text-center min-w-full pb-7">
            <h2 class="mx-auto text-blue-900 font-light text-3xl py-5">Inicio de sesión</h2></div>
        <form method="POST" action="{{ route('login') }}" class="px-10">
            @csrf

            <!-- Email Address -->
            <div class="mt-2">
                <div class="flex flex-wrap items-stretch w-full mb-4 relative h-15 bg-gray-200 items-center mb-6">
                    <div class="flex -mr-px justify-center w-15 px-2">
                    <span class="flex items-center leading-normal px-1 border-0 rounded-none text-2xl text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg>
                    </span>
                    </div>
                    {{-- <x-label for="email" :value="__('Email')" /> --}}
                    <x-input id="email" class="block w-full flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border-0 h-10 border-grey-light rounded rounded-l-none px-3 self-center relative outline-none" type="email" name="email" placeholder="Email de usuario" :value="old('email')" required autofocus />
                </div>
            </div>

            <!-- Password -->
            <div class="mt-6">
                    <div class="flex flex-wrap items-stretch w-full mb-4 relative h-15 bg-gray-200 items-center mb-6">
                        <div class="flex -mr-px justify-center w-15 px-2">
                            <span class="flex items-center leading-normal px-1 border-0 rounded-none text-2xl text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16"><path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/><path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>
                            </span>
                        </div>
                        {{-- <x-label for="email" :value="__('Email')" /> --}}
                        <x-input id="password" class="block w-full flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border-0 h-10 border-grey-light rounded rounded-l-none px-3 self-center relative outline-none" type="password"
                                 name="password"
                                 required autocomplete="current-password" placeholder="Contrasinal" autofocus />
                    </div>
                </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-6 mb-4">
 <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
    </div>
        </form>
    </x-auth-card>
    <div class="flex items-center justify-center mt-4">
    @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif
    </div>
</x-guest-layout>



