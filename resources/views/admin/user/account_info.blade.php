<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/5 p-2">
                <h2 class="font-semibold text-xl pl-4 pt-4 leading-tight">
                    {{ __('Datos da conta') }}
                </h2>
            </div>

            <div class="w-1/2 p-2">
                <a href="{{route('user.index')}}"
                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                    <!-- compoñente tooltip -->
                @include('admin.includes.tooltip')
                <!-- end tooltip -->
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-4 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">


                <div class="grid grid-cols-2">
                <div class="w-full px-10 py-4 bg-white overflow-hidden">
                    <h2
                        class="text-xl sm:text-xl font-medium text-gray-600 tracking-tight py-6 block">
                        {{ __('Actualizar datos') }}</h2>

                    <div class="mt-3">
                        @if ($errors->account->any())
                            <ul class="mt-3 list-none list-inside text-sm text-red-400">
                                @foreach ($errors->account->all() as $error)
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>&nbsp; {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if(session()->has('account_message'))
                            <div class="mb-8 text-green-400 font-bold">
                                {{ session()->get('account_message') }}
                            </div>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('admin.account.info.store') }}">
                        @csrf
                        <div class="py-2">
                            <label for="name" class="block font-medium uppercase text-sm text-gray-400{{$errors->account->has('name') ? ' text-red-400' : ''}}">{{ __('Name') }}</label>
                            <input id="name" class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->account->has('name') ? ' border-red-400' : ''}}"
                                   type="text"
                                   name="name"
                                   value="{{ old('name', $user->name) }}"
                            />
                        </div>
                        <div class="py-2">
                            <label for="email" class="block font-medium uppercase text-sm text-gray-400{{$errors->account->has('email') ? ' text-red-400' : ''}}">{{ __('Email') }}</label>
                            <input id="email" class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->account->has('email') ? ' border-red-400' : ''}}"
                                   type="email"
                                   name="email"
                                   value="{{ old('email', $user->email) }}"
                            />
                        </div>
                        <div class="flex mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type='submit' class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Update') }}
                            </button>
                            <a href="{{ route('user.index') }}" type="submit"
                               class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-400 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
                <!-- /div>
        </div>
    </div>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" -->

                <div class="w-full px-10 py-4 bg-white overflow-hidden">
                    <div class="mt-3">
                        <h2
                            class="text-xl sm:text-xl font-medium text-gray-600 tracking-tight py-6 block">
                            {{ __('Cambiar contrasinal') }}</h2>
                        @if ($errors->password->any())
                            <ul class="mt-3 list-none list-inside text-sm text-red-400">
                                @foreach ($errors->password->all() as $error)
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>&nbsp; {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if(session()->has('password_message'))
                            <div class="mb-8 text-green-400 font-bold">
                                {{ session()->get('password_message') }}
                            </div>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('admin.account.password.store') }}">
                        @csrf
                        <div class="py-2">
                            <label for="old_password" class="block font-medium uppercase text-sm text-gray-400{{$errors->password->has('old_password') ? ' text-red-400' : ''}}">{{ __('Old Password') }}</label>
                            <input id="old_password" class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->password->has('old_password') ? ' border-red-400' : ''}}"
                                   type="password"
                                   name="old_password"
                            />
                        </div>
                        <div class="py-2">
                            <label for="new_password" class="block font-medium uppercase text-sm text-gray-400{{$errors->password->has('new_password') ? ' text-red-400' : ''}}">{{ __('New Password') }}</label>
                            <input id="new_password" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->password->has('new_password') ? ' border-red-400' : ''}}"
                                   type="password"
                                   name="new_password"
                            />
                        </div>
                        <div class="py-2">
                            <label for="confirm_password" class="block font-medium uppercase text-sm text-gray-400{{$errors->password->has('confirm_password') ? ' text-red-400' : ''}}">{{ __('Confirm password') }}</label>
                            <input id="confirm_password" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->password->has('confirm_password') ? ' border-red-400' : ''}}"
                                   type="password"
                                   name="confirm_password"
                            />
                        </div>
                        <div class="flex justify-end mt-8 mb-10">
                            <button type='submit' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                {{ __('Cambiar contrasinal') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div></div>
</x-app-layout>
