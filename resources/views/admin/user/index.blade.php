<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 p-2">
                <h2 class="font-semibold text-xl pl-4 pt-4 leading-tight">
                    {{ __('Users') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                    @can('user create')
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('user.create') }}" class="text-blue-900 justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                    {{-- __('Add User') --}}
                                    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                            class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{ __('Usuario') }}</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                <!-- end tooltip -->
                            </a>
                        </div>
                    @endcan
                </div>
            </div>

            <div class="w-1/3 p-2 text-right">
                <!-- search form -->

                <form method="GET" action="{{ route('user.index') }}">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{{ request()->input('search') }}"
                                   class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="{{ __('Search') }}">
                            <button type='submit'
                                    class='ml-2 inline-flex items-center px-2 py-2 bg-tranparent border border-transparent rounded-md font-semibold text-xs  tracking-widest hover:bg-blue-200 active:bg-gray-200 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg> {{-- __('Search') --}}
                            </button>
                        </div>
                    </div>
                </form>
                <!-- end search form -->
            </div>
        </div>

    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 pt-0 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-2">

                        <div class="py-2">
                            @if (session()->has('message'))
                                <div class="ml-5 mb-6 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th
                                                class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Name') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                                        </th>
                                        <th
                                                class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            @include('admin.includes.sort-link', ['label' => 'Email', 'attribute' => 'email'])
                                        </th>
                                        @canany(['user edit', 'user delete'])
                                            <th colspan="2"
                                                class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-right">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcanany
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td
                                                    class="border-b border-slate-100 p-4 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('user.show', $user->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $user->name }}</a>
                                                </div>
                                            </td>
                                            <td
                                                    class="border-b border-slate-100 p-4 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    {{ $user->email }}
                                                </div>
                                            </td>
                                            @canany(['user edit', 'user delete'])
                                                <td
                                                        class="border-b border-slate-100 p-4 text-slate-500 text-right">
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                        <div class="flex justify-end">
                                                            @can('user edit')
                                                                <a href="{{ route('user.edit', $user->id) }}"
                                                                   class="px-4 py-2 text-cyan-600">
                                                                    <!-- compoñente tooltip -->
                                                                    <div class="relative flex inline-flex flex-col items-center group">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="h-6 w-6" fill="none"
                                                                             viewBox="0 0 24 24" stroke="currentColor"
                                                                             stroke-width="2">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                                        </svg> {{-- __('Edit') --}}
                                                                        <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                        <span
                                                class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                                          {{ __('Edit') }}</span>
                                                                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end tooltip -->
                                                                </a>
                                                            @endcan
                                                            @can('user delete')
                                                                @csrf
                                                                @method('DELETE')
                                                                {{-- <button class="px-4 py-2 text-white bg-red-600"
                                                                                                      onclick="deleteConfirm(user)" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                                                                  {{ __('Delete') }}
                                                                                              </button> --}}
                                                                <button class="px-2 py-2" onclick="deleteConfirm(user)">
                                                                    <!-- compoñente tooltip -->
                                                                    <div class="relative flex inline-flex flex-col items-center group text-red-600">
                                                                        {{-- __('Delete') --}}
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="h-6 w-6" fill="none"
                                                                             viewBox="0 0 24 24" stroke="currentColor"
                                                                             stroke-width="2">
                                                                            <path fill-rule="evenodd"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                                                  clip-rule="evenodd"/>
                                                                        </svg>
                                                                        <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                        <span
                                                class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                                          {{ __('Delete') }}</span>
                                                                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            @endcan
                                                        </div>
                                                    </form>
                                                </td>
                                            @endcanany
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="py-8">
                                {{ $users->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
