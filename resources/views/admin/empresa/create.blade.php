<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="px-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Empresa') }}
                </h2>
            </div>

            <div class="p-2 justify-end">
                <a href="{{route('empresa.index')}}"
                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                    <!-- compoñente tooltip -->
                @include('admin.includes.tooltip')
                <!-- end tooltip -->
                </a>
            </div>
            <div class="w-1/3 p-2 text-right">&nbsp;</div>
        </div>
    </x-slot>

    <div class="py-4 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="py-2 px-6">
                    <h2 class="text-xl sm:text-xl font-medium text-gray-400 tracking-tight pt-3 block">
                        {{ __('Datos de nova empresa') }}</h2>
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

                {{--  codpostal, databaja, dataprimeirocontacto, email, enderezo, fax, localidade, nome, notabaja, numtrabajadores,
                observacions, outrarelacionconcelleria, tfnofijo, tfnomovil, web, actividade_id, centro_id, orientador_id, provincia_id   --}}


                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('empresa.store') }}">
                        @csrf

                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2 py-1">
                                <label for="nome"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('nome') ? ' text-red-400' : ''}}">{{ __('Nome') }}</label>
                                <input id="nome"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('nome') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="nome"
                                       value="{{ old('nome') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="email"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('email') ? ' text-red-400' : ''}}">{{ __('Email') }}</label>
                                <input id="email"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('email') ? ' border-red-400' : ''}}"
                                       type="email"
                                       name="email"
                                       value="{{ old('email') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="web"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('web') ? ' text-red-400' : ''}}">{{ __('web') }}</label>
                                <input id="web"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('web') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="web"
                                       value="{{ old('web') }}"/>
                            </div>
                            <div class="col-span-2 py-1">
                                <label for="enderezo"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('enderezo') ? ' text-red-400' : ''}}">{{ __('Enderezo') }}</label>
                                <input id="enderezo"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('enderezo') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="enderezo"
                                       value="{{ old('enderezo') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="localidade"
                                       class="block font-medium uppercase text-sm text-gray-400 {{$errors->has('localidade') ? ' text-red-400' : ''}}">{{ __('Localidade') }}</label>
                                <input id="localidade"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('localidade') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="localidade"
                                       value="{{ old('localidade') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="codpostal"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Postal') }}</label>
                                <input id="codpostal"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="actividade"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('actividade') ? ' text-red-400' : ''}}">{{ __('Actividade ID') }}</label>
                                <input id="actividade"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('actividade_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="actividade"
                                       value="{{ old('actividade_id') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="tfnofijo"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('tfnofijo') ? ' text-red-400' : ''}}">{{ __('Teléfono fixo') }}</label>
                                <input id="tfnofijo"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('tfnofijo') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="tfnofijo"
                                       value="{{ old('tfnofijo') }}"/>
                            </div>
                            <div class="py-1">
                                <label for="tfnomovil"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('tfnomovil') ? ' text-red-400' : ''}}">{{ __('Teléfono Móbil') }}</label>
                                <input id="tfnomovil"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('tfnomovil') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="tfnomovil"
                                       value="{{ old('tfnomovil') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="persoa_contacto"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('persoa_contacto') ? ' text-red-400' : ''}}">{{ __('Persoa de contacto') }}</label>
                                <input id="persoa_contacto"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('persoa_contacto') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="persoa_contacto"
                                       value="{{ old('persoa_contacto') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="dataprimeirocontacto"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('dataprimeirocontacto') ? ' text-red-400' : ''}}">{{ __('Data primeiro contacto') }}</label>
                                <input id="dataprimeirocontacto"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('dataprimeirocontacto') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="dataprimeirocontacto"
                                       value="{{ old('dataprimeirocontacto') }}"/>
                            </div>


                            <div class="py-1">
                                <label for="numtrabajadores"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('numtrabajadores') ? ' text-red-400' : ''}}">{{ __('numtrabajadores') }}</label>
                                <input id="numtrabajadores"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('numtrabajadores') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="numtrabajadores"
                                       value="{{ old('numtrabajadores') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="fax"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('fax') ? ' text-red-400' : ''}}">{{ __('fax') }}</label>
                                <input id="fax"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('fax') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="fax"
                                       value="{{ old('fax') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="databaja"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('databaja') ? ' text-red-400' : ''}}">{{ __('Data da baixa') }}</label>
                                <input id="databaja"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('databaja') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="databaja"
                                       value="{{ old('databaja') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="observacions"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('observacions') ? ' text-red-400' : ''}}">{{ __('observacions') }}</label>
                                <textarea id="observacions" rows="4" cols="68"
                                          class="p-2.5 text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('observacions') }}"></textarea>
                            </div>


                            <div class="py-1 col-span-2">
                                <label for="notabaja"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('notabaja') ? ' text-red-400' : ''}}">{{ __('Nota de baixa') }}</label>
                                <textarea id="notabaja" rows="4" cols="68"
                                          class="p-2.5 text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('notabaja') }}"></textarea>
                            </div>


                            <div class="py-1">
                                <label for="outrarelacionconcelleria"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('outrarelacionconcelleria') ? ' text-red-400' : ''}}">{{ __('outrarelacionconcelleria') }}</label>
                                <input id="outrarelacionconcelleria"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('outrarelacionconcelleria') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="outrarelacionconcelleria"
                                       value="{{ old('outrarelacionconcelleria') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="centro_id"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('centro_id') ? ' text-red-400' : ''}}">{{ __('centro_id') }}</label>
                                <input id="centro_id"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('centro_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="centro_id"
                                       value="{{ old('centro_id') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="orientador_id"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('orientador_id') ? ' text-red-400' : ''}}">{{ __('orientador_id') }}</label>
                                <input id="orientador_id"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('orientador_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="orientador_id"
                                       value="{{ old('orientador_id') }}"/>
                            </div>

                            <div class="py-1">
                                <label for="provincia_id"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('provincia_id') ? ' text-red-400' : ''}}">{{ __('provincia_id') }}</label>
                                <input id="provincia_id"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('provincia_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="provincia_id"
                                       value="{{ old('provincia_id') }}"/>
                            </div>
                        </div> <!-- end grid -->

                        <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type='submit' class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Create') }}
                            </button>
                            <a href="{{ route('empresa.index') }}" type="submit"
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
