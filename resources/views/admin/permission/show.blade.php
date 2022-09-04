<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 p-2">
                <h2 class="font-semibold text-xl pl-4 pt-4 leading-tight">
                    {{ __('Permissions') }}
                </h2>
            </div>

            <div class="w-1/4 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                    @can('permission create')
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('permission.create') }}" class="text-gray-500 justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    {{-- __('Add permission') --}}
                                    <div
                                        class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                        class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('Permissions') }}</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                <!-- end tooltip -->
                            </a>
                        </div>
                    @endcan
                </div>
            </div>

            <div class="w-1/4 p-2 text-right">

                <!-- search form -->
                <form method="GET" action="{{ route('permission.index') }}">
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

    <div class="py-4 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="flex items-center mt-3">
                    <div class="w-1/2 p-2">
                        <h2
                            class="inline-block text-1xl sm:text-2xl font-bold text-slate-900 tracking-tight py-4 pl-6 block sm:inline-block flex">
                            {{ __('Ver permiso') }}</h2>
                        {{-- @if ($errors->any())
                            <ul class="mt-3 list-none list-inside text-sm text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif --}}
                    </div>
                    <div class="w-1/2 p-2 justify-end">
                        @canany(['permission edit', 'permission delete'])
                            <div class="p-1 pl-8 text-slate-500 text-right">
                                <!-- volver -->
                                <a href="{{ route('permission.index') }}"
                                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                                    <!-- compoñente tooltip -->
                                @include('admin.includes.tooltip')
                                <!-- end tooltip -->
                                </a>
                                <!-- editar/borrar -->
                                <form action="{{ route('permission.destroy', $permission->id) }}" method="POST"
                                      class="flex inline-flex">
                                    @can('permission edit')
                                        <a href="{{ route('permission.edit', $permission->id) }}"
                                           class="px-2 py-2 text-cyan-600">
                                            <!-- compoñente tooltip -->
                                            <div class="relative flex inline-flex flex-col items-center group">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                     viewBox="0 0 24 24"
                                                     stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                </svg> {{-- __('Edit') --}}
                                                <div
                                                    class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                          <span
                              class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                            {{ __('Edit') }}</span>
                                                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                </div>
                                            </div>
                                            <!-- end tooltip -->
                                        </a>
                                    @endcan
                                    @can('permission delete')
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-2 py-2">
                                            <!-- compoñente tooltip -->
                                            <div
                                                class="relative flex inline-flex flex-col items-center group text-red-600">
                                                {{-- __('Delete') --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                     viewBox="0 0 24 24"
                                                     stroke="currentColor" stroke-width="2">
                                                    <path fill-rule="evenodd" stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div
                                                    class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                          <span
                              class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                            {{ __('Delete') }}</span>
                                                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                </div>
                                            </div>
                                        </button>
                                    @endcan
                                </form>
                            </div>
                        @endcanany
                    </div>
                </div>

                <div class="w-full px-6 py-4">
                    <div class="min-w-full">
                        {{-- `id`, `dataata`, `datadende`, `lugar`, `nome`, `numhoras`, `numprazas`, `tipo`, `accionsfe_id`, `id_empresa`, `created_at`, `updated_at` --}}
                        <div class="grid grid-cols-4 gap-4 mb-10">
                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">Permiso</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $permission->name }}</div>
                            </div>
                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Created') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{$permission->created_at}}</div>
                            </div>
                        </div><!-- end grid-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
