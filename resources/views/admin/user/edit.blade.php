<x-app-layout>
    <div class="flex">
        <div class="w-1/2 p-2 text-left">
            <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
            {{ __('Users') }}
            </h2>
        </div>
        <div class="w-1/6 p-2 justify-end">
            <div class="p-2 w-22 h-22 flex justify-end items-center">

            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Update user') }}</h1>

                    <a href="{{route('user.index')}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                        <!-- compoñente tooltip -->
                        <div class="relative flex inline-flex flex-col items-center group">
                            <span class="items-center mt-4"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>

                            <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{__('Back') }}</span>
                                <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                            </div>
                        </div>
                        <!-- end tooltip -->
                    </a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-6 gap-4">
                        <div class="py-2">
                            <label for="name" class="block font-medium uppercase text-sm text-gray-400{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Name') }}</label>
                            <input id="name" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-red-400' : ''}}"
                                   type="text"
                                   name="name"
                                   value="{{ old('name', $user->name) }}"
                            />
                        </div>
                        <div class="py-2">
                            <label for="email" class="block font-medium uppercase text-sm text-gray-400{{$errors->has('email') ? ' text-red-400' : ''}}">{{ __('Email') }}</label>
                            <input id="email" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('email') ? ' border-red-400' : ''}}"
                                   type="email"
                                   name="email"
                                   value="{{ old('email', $user->email) }}"
                            />
                        </div>
                        <div class="py-2">
                            <label for="password" class="block font-medium uppercase text-sm text-gray-400{{$errors->has('password') ? ' text-red-400' : ''}}">{{ __('Password') }}</label>
                            <input id="password" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('password') ? ' border-red-400' : ''}}"
                                   type="password"
                                   name="password"
                            />
                        </div>
                        <div class="py-2">
                            <label for="password_confirmation" class="block font-medium uppercase text-sm text-gray-400{{$errors->has('password') ? ' text-red-400' : ''}}">{{ __('Password Confirmation') }}</label>
                            <input id="password_confirmation" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('password') ? ' border-red-400' : ''}}"
                                   type="password"
                                   name="password_confirmation"
                            />
                        </div>
                        <div class="py-2">
                            <h3 class="inline-block text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">Roles</h3>
                            <div class="grid grid-cols-4 gap-4">
                                @forelse ($roles as $role)
                                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="roles[]" value="{{ $role->name }}" {{ in_array($role->id, $userHasRoles) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @empty
                                    ----
                                @endforelse
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type='submit' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>