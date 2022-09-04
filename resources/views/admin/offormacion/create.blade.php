<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/4 p-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Ofertas de formación') }}
                </h2>
            </div>

            <div class="p-2 items-center items-end">
                <a href="{{ route('offormacion.index') }}"
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
                <div class="flex items-center mt-3">
                    <div class="w-1/2 p-2">
                        <h2 class="inline-block text-1xl sm:text-2xl font-medium text-gray-400 tracking-tight pl-4 py-4 block sm:inline-block flex">
                        {{ __('Crear nova oferta de formación') }}</h2>
                    <div class="bg-gray-100 px-4 mt-1">
                        @if ($errors->any())
                            <ul class="list-none list-inside text-base text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li class="flex items-center py-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>&nbsp; {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                </div>

                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('offormacion.store') }}">
                        @csrf

                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2 py-1">
                                <label for="nome"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}">{{ __('Nome') }}</label>
                                <input id="nome"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('nome') ? ' border-red-400' : '' }}"
                                       type="text" name="nome" value="{{ old('nome') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="datadende"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('datadende') ? ' text-red-400' : '' }}">{{ __('data dende') }}</label>
                                <input id="datadende"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('datadende') ? ' border-red-400' : '' }}"
                                       type="date" name="datadende" value="{{ old('datadende') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="dataata"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('dataata') ? ' text-red-400' : '' }}">{{ __('data ata') }}</label>
                                <input id="dataata"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('dataata') ? ' border-red-400' : '' }}"
                                       type="date" name="dataata" value="{{ old('dataata') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="lugar"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('lugar') ? ' text-red-400' : '' }}">{{ __('lugar') }}</label>
                                <input id="lugar"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('lugar') ? ' border-red-400' : '' }}"
                                       type="text" name="lugar" value="{{ old('lugar') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="numhoras"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('numhoras') ? ' text-red-400' : '' }}">{{ __('num horas') }}</label>
                                <input id="numhoras"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numhoras') ? ' border-red-400' : '' }}"
                                       type="text" name="numhoras" value="{{ old('numhoras') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="numprazas"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('num prazas') }}</label>
                                <input id="numprazas"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numprazas') ? ' border-red-400' : '' }}"
                                       type="text" name="numprazas" value="{{ old('numprazas') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="tipo"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('tipo') }}</label>
                                <input id="tipo"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('tipo') ? ' border-red-400' : '' }}"
                                       type="text" name="tipo" value="{{ old('tipo') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="accionsfe_id"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('accion sfe id') }}</label>
                                <input id="accionsfe_id"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('accionsfe_id') ? ' border-red-400' : '' }}"
                                       type="text" name="accionsfe_id" value="{{ old('accionsfe_id') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="id_empresa"
                                       class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('empresa id') }}</label>
                                <input id="id_empresa"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('id_empresa') ? ' border-red-400' : '' }}"
                                       type="text" name="id_empresa" value="{{ old('id_empresa') }}"/>
                            </div>
                        </div> <!-- end grid -->

                        <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type='submit' class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Create') }}
                            </button>
                            <a href="{{ route('offormacion.index') }}" type="submit"
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
