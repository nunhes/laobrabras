<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/4 p-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Ofertas de emprego') }}
                </h2>
            </div>

            <div class="p-2 items-center items-end">
                <a href="{{ route('oftraballo.index') }}"
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
                        <h2 class="inline-block text-1xl sm:text-2xl font-medium text-gray-400 tracking-tight py-4 pl-4 block sm:inline-block flex">
                        {{ __('Crear nova oferta de traballo') }}</h2>
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
                    <form method="POST" action="{{ route('oftraballo.store') }}">
                        @csrf

                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-3 py-1">
                                <label for="posto"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('posto') ? ' text-red-400' : '' }}">{{ __('Posto') }}</label>
                                <input id="posto"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('posto') ? ' border-red-400' : '' }}"
                                       type="text" name="posto" value="{{ old('posto') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="data"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('Data') }}</label>
                                <input id="data"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('data') ? ' border-red-400' : '' }}"
                                       type="date" name="data" value="{{ old('data') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="id_empresa"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('id_empresa') ? ' text-red-400' : '' }}">{{ __('id empresa') }}</label>
                                <input id="id_empresa"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('id_empresa') ? ' border-red-400' : '' }}"
                                       type="text" name="id_empresa" value="{{ old('id_empresa') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="nummeses"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('Nº Meses') }}</label>
                                <input id="nummeses"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('nummeses') ? ' border-red-400' : '' }}"
                                       type="text" name="nummeses" value="{{ old('nummeses') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="numpostosofertados"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('Postos ofertados') }}</label>
                                <input id="numpostosofertados"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numpostosofertados') ? ' border-red-400' : '' }}"
                                       type="text" name="numpostosofertados" value="{{ old('numpostosofertados') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="estudiosminimos"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('estudiosminimos') ? ' text-red-400' : '' }}">{{ __('estudiosminimos') }}</label>
                                <input id="estudiosminimos"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('estudiosminimos') ? ' border-red-400' : '' }}"
                                       type="text" name="estudiosminimos" value="{{ old('estudiosminimos') }}"/>
                            </div>

                            <div class="py-1 col-span-2">
                                <label for="observacions"
                                       class="block text-sm font-medium uppercase text-gray-400">{{ __('Observacións') }}</label>
                                <textarea id="observacions" rows="4" cols="60"
                                          class="p-2.5 text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500 block mt-1 w-full"
                                          placeholder="{{ old('observacions') }}"></textarea>
                            </div>

                            <div class="py-1">
                                <label for="accionsfe_id"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('AccionsFE ID') }}</label>
                                <input id="accionsfe_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('accionsfe_id') ? ' border-red-400' : '' }}"
                                       type="text" name="accionsfe_id" value="{{ old('accionsfe_id') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="catagoriaprofesional_id"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('catagoriaprofesional_id') ? ' text-red-400' : '' }}">{{ __('categoriaprofesional_id') }}</label>
                                <input id="catagoriaprofesional_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('catagoriaprofesional_id') ? ' border-red-400' : '' }}"
                                       type="text" name="catagoriaprofesional_id"
                                       value="{{ old('catagoriaprofesional_id') }}"/>
                            </div>
                        </div> <!-- end grid -->

                        <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type='submit' class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Create') }}
                            </button>
                            <a href="{{ route('oftraballo.index') }}" type="submit"
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
