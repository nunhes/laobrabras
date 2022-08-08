<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
                    {{ __('Oferta de formación') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                    {{--  @can('offormacion create')
                          <div class="d-print-none with-border mt-2 p-0">
                              <a href="{{ route('offormacion.create') }}"
class="text-gray-500 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
                              <abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; + Oferta">
                                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
{{- __('Add Oferta') -}}</abbr></a>
                          </div>
                      @endcan --}}
                </div>

            </div>
            <div class="w-1/3 p-2 text-right">
                <!-- search form -->
                <form method="GET" action="{{ route('offormacion.index') }}">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{{ request()->input('search') }}"
                                   class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="{{__('Search') }}">
                            <button type='submit'
                                    class='ml-2 inline-flex items-center px-2 py-2 bg-tranparent border border-transparent rounded-md font-semibold text-xs  tracking-widest hover:bg-blue-200 active:bg-gray-200 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg> {{--  __('Search')  --}}
                            </button>
                        </div>
                    </div>
                </form>
                <!-- end search form -->
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Actualizar oferta formación') }}</h1>
                    <a href="{{route('offormacion.index')}}"
                       class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                        <abbr class="tooltip tooltip--right" data-tooltip="&nbsp; Volver">
                            <span class="items-center mt-4"><svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>
                            {{--  __('<< Back to all oferta f') --}}</abbr></a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('offormacion.update', $offormacion->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-6 gap-4">
                            <div class="py-2">
                                <label for="nome" class="block uppercase font-medium text-sm text-gray-400{{$errors->has('nome') ? ' text-red-400' : ''}}">{{ __('Nome') }}</label>
                                <input id="nome" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="nome"
                                       value="{{ old('nome', $offormacion->nome) }}" />
                            </div>

                            <div class="py-2">
                                <label for="dataata"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('dataata') ? ' text-red-400' : ''}}">{{ __('dataata') }}</label>
                                <input id="dataata"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('dataata') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="dataata"
                                       value="{{ old('dataata', $offormacion->dataata) }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="datadende"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('datadende') ? ' text-red-400' : ''}}">{{ __('datadende') }}</label>
                                <input id="datadende"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('datadende') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="datadende"
                                       value="{{ old('datadende', $offormacion->datadende) }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="lugar"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('lugar') ? ' text-red-400' : ''}}">{{ __('lugar') }}</label>
                                <input id="lugar"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('lugar') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="lugar"
                                       value="{{ old('lugar', $offormacion->lugar) }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="numhoras"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('numhoras') ? ' text-red-400' : ''}}">{{ __('numhoras') }}</label>
                                <input id="numhoras"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('numhoras') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="numhoras"
                                       value="{{ old('numhoras', $offormacion->numhoras) }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="numprazas"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('numprazas') ? ' text-red-400' : ''}}">{{ __('numprazas') }}</label>
                                <input id="numprazas"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('numprazas') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="numprazas"
                                       value="{{ old('numprazas', $offormacion->numprazas)  }}"
                                />
                            </div>
                            <div class="py-2">
                                <label for="tipo"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('tipo') ? ' text-red-400' : ''}}">{{ __('tipo') }}</label>
                                <input id="tipo"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('tipo') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="tipo"
                                       value="{{ old('tipo', $offormacion->tipo)  }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="accionsfe_id"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('accionsfe_id') ? ' text-red-400' : ''}}">{{ __('accionsfe_id') }}</label>
                                <input id="accionsfe_id"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('accionsfe_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="accionsfe_id"
                                       value="{{ old('accionsfe_id', $offormacion->accionsfe_id) }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="id_empresa"
                                       class="block uppercase font-medium text-sm text-gray-400{{$errors->has('id_empresa') ? ' text-red-400' : ''}}">{{ __('id_empresa') }}</label>
                                <input id="id_empresa"
                                       class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('id_empresa') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="id_empresa"
                                       value="{{ old('id_empresa', $offormacion->id_empresa) }}"
                                />
                            </div>
                        </div> <!-- end grid -->

                        <div class="flex justify-end mt-4">
                            <button type='submit'
                                    class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
