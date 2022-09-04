<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 px-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Empresas') }}
                </h2>
            </div>
            <div class="w-1/4 p-2 justify-end text-right">
                <div class="p-2">
                    @can('empresa create')
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('empresa.create') }}" class="text-gray-500 justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    {{-- __('Create') --}}
                                    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('Create') }}</span>
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
                <form method="GET" action="{{ route('empresa.index') }}">
                    <div class="py-2 flex justify-end">
                        <div class="overflow-hidden flex pl-4 text-right">
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
                            {{-- __('Empresa') --}} {{ $empresa->nome }} </h2>

                        {{-- @if ($errors->any())
                                    <ul class="mt-3 list-none list-inside text-sm text-red-400">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif --}}
                    </div>
                    <div class="w-1/2 p-2 justify-end">
                        @canany(['empresa edit', 'empresa delete'])
                            <div class="p-1 pl-8 text-slate-500 text-right">
                                <!-- volver -->
                                <a href="{{ route('empresa.index') }}"
                                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                                    <!-- compoñente tooltip -->
                                @include('admin.includes.tooltip')
                                <!-- end tooltip -->
                                </a>
                                <!-- editar/borrar -->
                                <form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST"
                                      class="flex inline-flex">
                                    @can('permission edit')
                                        <a href="{{ route('empresa.edit', $empresa->id) }}"
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
                                    @can('empresa delete')
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

                <div class="w-full px-6 py-2">
                    <div class="min-w-full">
                        <div class="grid grid-cols-4 gap-4 mb-10">
                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Nome') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->nome }}</div>
                            </div>

                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Email') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->email }}</div>
                            </div>
                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Inserida en') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->created_at }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('web') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->web }}</div>
                            </div>

                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Enderezo') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->enderezo }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Localidade') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->localidade }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Código Postal') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->codpostal }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Actividade ID') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->actividade_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Teléfono fixo') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->tfnofijo }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Teléfono Móbil') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->tfnomovil }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Persoa de contacto') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->persoa_contacto }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data primeiro contacto') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->dataprimeirocontacto }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('numtrabajadores') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->numtrabajadores }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('fax') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->fax }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data da baixa') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->databaja }}</div>
                            </div>

                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Observacións') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->observacions }}</div>
                            </div>

                            <div class="col-span-2 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Nota de baixa') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->notabaja }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('outrarelacionconcelleria') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->outrarelacionconcelleria }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('centro_id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->centro_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('orientador_id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->orientador_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('provincia_id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $empresa->provincia_id }}</div>
                            </div>
                        </div> <!-- end grid -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
