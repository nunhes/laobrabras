<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="p-2">
        <h2 class="font-semibold text-xl pl-4 pt-4 leading-tight">
            {{ __('Roles') }}
        </h2>
            </div>

            <div class="p-2">
                <a href="{{route('role.index')}}"
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
                <div class="py-2 px-6">
                    <h2
                        class="text-xl sm:text-xl font-medium text-gray-400 tracking-tight pt-6 block">
                        {{ __('Actualizar rol') }}</h2>
                       <div class="bg-gray-100 px-4 mt-1">
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-base text-red-400">
                            @foreach ($errors->all() as $error)
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                       </div>
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('role.update', $role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="py-2">
                            <label for="name" class="block font-medium uppercase text-sm text-gray-400{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Name') }}</label>
                            <input id="name" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-red-400' : ''}}"
                                   type="text"
                                   name="name"
                                   value="{{ old('name', $role->name) }}"
                            />
                        </div>
                        @unless ($role->name == env('APP_SUPER_ADMIN', 'super-admin'))
                            <div class="py-2 mb-10">
                                <h3 class="text-xl sm:text-1xl font-bold text-slate-900 tracking-tight py-4 block">Permisos</h3>
                                <div class="grid grid-cols-4 gap-4">
                                    @forelse ($permissions as $permission)
                                        <div class="col-span-4 sm:col-span-2 md:col-span-1">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ in_array($permission->id, $roleHasPermissions) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @empty
                                        ----
                                    @endforelse
                                </div>
                            </div>
                        @endunless
                        <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type='submit' class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Update') }}
                            </button>
                            <a href="{{ route('role.index') }}" type="submit"
                               class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-400 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
