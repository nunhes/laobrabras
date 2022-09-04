<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 px-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Persoas') }}
                </h2>
            </div>
            <div class="w-1/4 p-2 justify-end text-right">
                <div class="p-2">
                    @can('cidadan create')
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('cidadan.create') }}" class="text-gray-500 justify-center">
                                <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    {{-- __('Create') --}}
                                    <div
                                        class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                        class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
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
                <form method="GET" action="{{ route('cidadan.index') }}">
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
    {{-- addiccions,addiccionsnota,apel1,apel2,bial,codpostal,databaja,dataincorporacion,datanacemento,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,email,enderezo,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,nif,nome,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,sexo,spe,tbe,tbedata,tfno1,tfno2,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota) VALUES --}}

    <div class="py-4 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="flex items-center mt-3">
                    <div class="w-1/2 p-2">
                        <h2
                            class="inline-block text-1xl sm:text-2xl font-bold text-slate-900 tracking-tight py-4 pl-6 block sm:inline-block flex">
                            {{-- __('Cidadan') --}} {{ $cidadan->nome }} {{ $cidadan->apel1 }} {{ $cidadan->apel2 }}</h2>

                        {{-- @if ($errors->any())
                                    <ul class="mt-3 list-none list-inside text-sm text-red-400">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif --}}
                    </div>
                    <div class="w-1/2 p-2 justify-end">
                        @canany(['cidadan edit', 'cidadan delete'])
                            <div class="p-1 pl-8 text-slate-500 text-right">
                                <!-- volver -->
                                <a href="{{ route('cidadan.index') }}"
                                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                                    <!-- compoñente tooltip -->
                                @include('admin.includes.tooltip')
                                <!-- end tooltip -->
                                </a>
                                <!-- editar/borrar -->
                                <form action="{{ route('cidadan.destroy', $cidadan->id) }}" method="POST"
                                      class="flex inline-flex">
                                    @can('permission edit')
                                        <a href="{{ route('cidadan.edit', $cidadan->id) }}"
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
                                    @can('cidadan delete')
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
                        <div class="grid grid-cols-4 gap-4 mb-10">
                            {{--   <div class="border-b-2 border-gray-400 pl-1 pr-3 block">
                                <label for="firstName" class="block text-sm font-light text-gray-400">{{ __('First name') }}</label>
                                {{ $cidadan->nome }}
                              </div>
                              <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Apelido 1" class="block text-sm font-light text-gray-400">{{ __('Apelido 1') }}</label>
                                {{ $cidadan->apel1 }}
                              </div>
                              <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Apelido 2" class="block text-sm font-light text-gray-400">{{ __('Apelido 2') }}</label>
                                {{ $cidadan->apel2 }}
                              </div> --}}
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('NIF') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->nif }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('email') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->email }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Teléfono') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->tfno1 }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Móbil') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->tfno2 }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Enderezo') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->enderezo }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('CP') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->codpostal }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('bial') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->bial }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data nacemento') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->datanacemento }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">{{-- <!-- podería ser created-at --> --}}
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Incorporación') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->dataincorporacion }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Xénero') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->sexo }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Acepta LDOP') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->lopd }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Desempregado LD') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->desempregadolongaduracion }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('DLD Nota') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->desempregadolongaduracionnota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Grupos busca') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->gruposbusca }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('grupos busca data') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->gruposbuscadata }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Discapacidade') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->discapacidade }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Discapacidade nota') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->discapacidadenota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Vehículo propio') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->vehiculopropio }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('vo') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->vo }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('vo nota') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->vonota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Orientacion') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->orientacion }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-3">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Observacions') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->observacions }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Habilidades sociais') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->habilidadessociais }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Hab.Soc. data') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->habilidadessociaisdata }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('SPE') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->spe }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('TBE') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->tbe }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('tbe data') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->tbedata }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Adictions') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->addiccions }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Adictions') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->addiccionsnota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('exreclusa') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->exreclusa }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-3">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('exreclusa nota') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->exreclusanota }}</div>
                            </div>


                            <div class="border-b border-gray-200 shadow">{{-- <!-- podería ser updated-at --> --}}
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data baixa') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->databaja }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Tipo de baixa') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->tipobaixa_id }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Nota baixa') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->notabaja }}</div>
                            </div>


                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('outras exclusions') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->outrasexclusions }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-3">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Outras Ex. nota') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->outrasexclusionsnota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Residencia dif. accs.') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->residenciadificilaccesibilidade }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-3">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Residencia nota') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->residenciadificilaccesibilidadenota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Resp. familiares') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->responsabilidadesfamiliares }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-3">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Respn. Fam. nota') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->responsabilidadesfamiliaresnota }}</div>
                            </div>


                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('accions fe id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->accionsfe_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('canle acceso id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->canleacceso_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('outros datos id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->datosoutros_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('dispoñibilidade xeografica id') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->disponibilidadexeografica_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('emigración tipo id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->emigraciontype_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('interes autoemprego id') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->interesaautoemprego_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('nacionalidade id') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->nacionalidade_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Operador ID') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->operador_id }}</div>
                            </div>

                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Poboación ID') }}</label>
                                <div
                                    class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->poboacion_idconcello }}</div>
                            </div>


                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('VVX') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->vvx }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow col-span-2">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('VVX nota') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->vvxnota }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Actualizado') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->updated_at }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label
                                    class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Creado') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $cidadan->created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- addiccions,addiccionsnota,apel1,apel2,bial,codpostal,databaja,dataincorporacion,datanacemento,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,email,enderezo,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,nif,nome,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,sexo,spe,tbe,tbedata,tfno1,tfno2,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota) VALUES --}}
