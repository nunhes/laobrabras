<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 p-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Empresas') }}
                </h2>
            </div>

            <div class="w-1/2 items-center items-end">
                <div class="p-0 flex justify-end items-center">
                    @can('empresa create')
                        <div class="d-print-none with-border mt-2 py-4">
                            <a href="{{ route('empresa.create') }}" class="text-gray-500 justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    {{-- __('Add Empresa') --}}
                                    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('Empresa') }}</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                <!-- end tooltip -->
                            </a>
                        </div>
                @endcan

                <!-- search form -->
                    <form method="GET" action="{{ route('empresa.index') }}">
                        <div class="py-2 px-8 flex">
                            <div class="overflow-hidden flex py-4">
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

                    <div class="bg-gray-100">{{-- Icona de exportar a excel --}}
                        <div class="d-print-none with-border mt-2 py-4 mr-3">
                            <a href="{{ route('admin.exportempresa') }}" class="justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="#15803d" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    {{-- __('Exportar Excel') --}}
                                    <div
                                        class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                        class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('Excel') }}</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                <!-- end tooltip -->
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-100 py-4">{{-- Icona de exportar a pdf --}}
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('admin.exportpdfempresa') }}" class="text-red-700 justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="#dc2626" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    {{-- __('Exportar PDF') --}}
                                    <div
                                        class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                        class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('PDF') }}</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                <!-- end tooltip -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="py-2 mb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 pt-0 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-2">

                        <div class="py-2">
                            @if (session()->has('message'))
                                <div
                                    class="pl-6 pt-4 pb-6 text-green-400 text-xl sm:text-xl font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 13.5l6.75 6.75L21 4.5"/>
                                    </svg>&nbsp; {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                                {{-- `id`, `codpostal`, `databaja`, `dataprimeirocontacto`, `email`, `enderezo`, `fax`, `localidade`, `nome`, `notabaja`, `numtrabajadores`, `observacions`, `outrarelacionconcelleria`, `tfnofijo`, `tfnomovil`, `web`, `actividade_id`, `centro_id`, `orientador_id`, `provincia_id`, `created_at`, `updated_at` --}}
                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Name') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Nome', 'attribute' => 'nome'])
                                        </th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Email') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Email', 'attribute' => 'email'])
                                        </th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Web') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Web', 'attribute' => 'web'])
                                        </th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Teléfono') --}}
                                            @include('admin.includes.sort-link', [
                                                'label' => 'Teléfono',
                                                'attribute' => 'tfnofijo',
                                            ])
                                        </th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Mobil') --}}
                                            @include('admin.includes.sort-link', [
                                                'label' => 'Móbil',
                                                'attribute' => 'tfnomovil',
                                            ])
                                        </th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Localidade') --}}
                                            @include('admin.includes.sort-link', [
                                                'label' => 'Localidade',
                                                'attribute' => 'localidade',
                                            ])
                                        </th>
                                        <th
                                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Data contacto') --}}
                                            @include('admin.includes.sort-link', [
                                                'label' => 'D.contacto',
                                                'attribute' => 'dataprimeirocontacto',
                                            ])
                                        </th>
                                        @canany(['empresa edit', 'empresa delete'])
                                            <th colspan="2"
                                                class="py-4 pl-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-center">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcanany
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            {{-- `id`, `codpostal`, `databaja`, `dataprimeirocontacto`, `email`, `enderezo`, `fax`, `localidade`, `nome`, `notabaja`, `numtrabajadores`, `observacions`, `outrarelacionconcelleria`, `tfnofijo`, `tfnomovil`, `web`, `actividade_id`, `centro_id`, `orientador_id`, `provincia_id`, `created_at`, `updated_at` --}}
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->nome }}</a>
                                                </div>
                                            </td>
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->email }}</a>
                                                </div>
                                            </td>
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->web }}</a>
                                                </div>
                                            </td>
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->tfnofijo }}</a>
                                                </div>
                                            </td>
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->tfnomovil }}</a>
                                                </div>
                                            </td>
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->localidade }}</a>
                                                </div>
                                            </td>
                                            <td
                                                class="border-b border-slate-100 p-1 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('empresa.show', $empresa->id) }}"
                                                       class="no-underline hover:underline text-cyan-600">{{ $empresa->dataprimeirocontacto }}</a>
                                                </div>
                                            </td>
                                            @canany(['empresa edit', 'empresa delete'])
                                                <td
                                                    class="border-b border-slate-100 p-1 pl-6 text-slate-500">


                                                    {{-- <a href="{{route('empresa.show', $empresa->id)}}"
                                                                               class="no-underline hover:underline text-cyan-600">
                                                                                <!-- compoñente tooltip -->
                                                                                <div class="relative flex inline-flex flex-col items-center group">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                                         fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                                         stroke-width="2">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                                                    </svg>
                                                                                    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                                                        <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{__('View') }}</span>
                                                                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end tooltip -->
                                                                            </a> --}}


                                                    <form action="{{ route('empresa.destroy', $empresa->id) }}"
                                                          method="POST"
                                                          class="flex inline-flex">
                                                        @can('empresa edit')
                                                            <a href="{{ route('empresa.edit', $empresa->id) }}"
                                                               class="px-2 py-2 text-cyan-600">
                                                                <!-- compoñente tooltip -->
                                                                <div
                                                                    class="relative flex inline-flex flex-col items-center group">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         class="h-6 w-6"
                                                                         fill="none"
                                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                                         stroke-width="2">
                                                                        <path stroke-linecap="round"
                                                                              stroke-linejoin="round"
                                                                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                                    </svg> {{-- __('Edit') --}}
                                                                    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                                        <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{ __('Edit') }}</span>
                                                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                    </div>
                                                                </div>
                                                                <!-- end tooltip -->
                                                            </a>
                                                        @endcan
                                                        @can('empresa delete')
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-2 py-2" onclick="deleteConfirm(empresa)">
                                                                <!-- compoñente tooltip -->
                                                                <div
                                                                    class="relative flex inline-flex flex-col items-center group text-red-600">
                                                                    {{-- __('Delete') --}}
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         class="h-6 w-6"
                                                                         fill="none"
                                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                                         stroke-width="2">
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
                                                                        <div
                                                                            class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        @endcan
                                                    </form>
                                                </td>
                                            @endcanany
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                                <div class="py-4 px-2">
                                    <span class="uppercase py-2">{{ $empresas->appends(request()->query())->links('pagination::tailwind') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
