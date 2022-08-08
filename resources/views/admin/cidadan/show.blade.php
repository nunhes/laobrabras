<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
            {{ __('Cidadans') }}
        </h2>
     </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                        @can('cidadan create')
                            <div class="d-print-none with-border mt-2 p-0">
                                <a href="{{ route('cidadan.create') }}"
class="text-gray-500 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
{{--<abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; + Persoa">
<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
{{- __('Add Cidadan') -}}</abbr>--}}
<!-- compoñente tooltip -->
<div class="relative flex inline-flex flex-col items-center group">
    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
 {{-- __('Create') --}}
    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
        <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Create') }}</span>
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

                                <form method="GET" action="{{ route('cidadan.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{ __('Search') }}">
                                            <button type='submit' class='ml-2 inline-flex items-center px-2 py-2 bg-tranparent border border-transparent rounded-md font-semibold text-xs  tracking-widest hover:bg-blue-200 active:bg-gray-200 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg> {{--  __('Search')  --}}
                            </button>
                                        </div>
                                    </div>
                                </form>
                <!-- end search form -->
            </div>
        </div>

    </x-slot> 
 {{-- addiccions,addiccionsnota,apel1,apel2,bial,codpostal,databaja,dataincorporacion,datanacemento,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,email,enderezo,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,nif,nome,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,sexo,spe,tbe,tbedata,tfno1,tfno2,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota) VALUES--}}

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center mt-3">
                    <div class="w-1/2 p-2 text-left">
                        <h2 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pl-6 block sm:inline-block flex">{{ __('Cidadan') }}</h2>

                        {{--@if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif--}}
                    </div>
                    <div class="w-1/2 p-2 justify-end">
                        @canany(['cidadan edit', 'cidadan delete'])
                            <div class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                <!-- volver -->
                                <a href="{{route('cidadan.index')}}"
                                   class="inline-block no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                                    <!-- compoñente tooltip -->
                                    <div class="relative flex inline-flex flex-col items-center group pl-3">
                            <span class="items-center mt-3"><svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>
                                        {{--  __('<< Back to all oftraballo') --}}
                                        <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                            <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Back') }}</span>
                                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                        </div>
                                    </div>
                                    <!-- end tooltip -->
                                </a>
                                <!-- editar/borrar -->
                                <form action="{{ route('cidadan.destroy', $cidadan->id) }}" method="POST" class="flex inline-flex">
                                    @can('permission edit')
                                        <a href="{{route('cidadan.edit', $cidadan->id)}}" class="px-2 py-2 text-cyan-600">
                                            <!-- compoñente tooltip -->
                                            <div class="relative flex inline-flex flex-col items-center group">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg> {{-- __('Edit') --}}
                                                <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Edit') }}</span>
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
                                            <div class="relative flex inline-flex flex-col items-center group text-red-600">
                                                {{-- __('Delete') --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" clip-rule="evenodd" />
                                                </svg>
                                                <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Delete') }}</span>
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

                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">

                        <div class="emulated-flex-gap text-blue-700">
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="firstName"
                                       class="block text-sm font-light text-gray-400">{{ __('First name') }}</label>
                                {{$cidadan->nome}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Apelido 1"
                                       class="block text-sm font-light text-gray-400">{{ __('Apelido 1') }}</label>
                                {{$cidadan->apel1}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Apelido 2"
                                       class="block text-sm font-light text-gray-400">{{ __('Apelido 2') }}</label>
                                {{$cidadan->apel2}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="NIF" class="block text-sm font-light text-gray-400">{{ __('NIF') }}</label>
                                {{$cidadan->nif}}  </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="email"
                                       class="block text-sm font-light text-gray-400 min-w-max">{{ __('email') }}</label>
                                {{$cidadan->email}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Teléfono"
                                       class="block text-sm font-light text-gray-400 min-w-max">{{ __('Teléfono') }}</label>
                                {{$cidadan->tel1}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Móbil"
                                       class="block text-sm font-light text-gray-400 min-w-max">{{ __('Móbil') }}</label>
                                {{$cidadan->tel2}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="bial"
                                       class="block text-sm font-light text-gray-400">{{ __('bial') }}</label>
                                {{$cidadan->bial}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccions"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->addiccions}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->addiccionsnota}}</div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Código Postal"
                                       class="block text-sm font-light text-gray-400">{{ __('CP') }}</label>
                                {{$cidadan->codpostal}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">{{-- <!-- podería ser updated-at --> --}}
                                <label for="Data baja"
                                       class="block text-sm font-light text-gray-400">{{ __('Data baixa') }}</label>
                                {{$cidadan->databaja}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3"> {{-- <!-- podería ser created-at --> --}}
                                <label for="Data incorporación"
                                       class="block text-sm font-light text-gray-400">{{ __('Incorporación') }}</label>
                                {{$cidadan->dataincorporacion}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Data nacemento"
                                       class="block text-sm font-light text-gray-400">{{ __('Data nacemento') }}</label>
                                {{$cidadan->datanacemento}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="desempregado longa duracion"
                                       class="block text-sm font-light text-gray-400">{{ __('Desempregado LD') }}</label>
                                {{$cidadan->desempregadolongaduracion}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="desempregado longa duracion nota"
                                       class="block text-sm font-light text-gray-400">{{ __('DLD Nota') }}</label>
                                {{$cidadan->desempregadolongaduracionnota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Discapacidade"
                                       class="block text-sm font-light text-gray-400">{{ __('Discapacidade') }}</label>
                                {{$cidadan->discapacidade}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Discapacidade nota"
                                       class="block text-sm font-light text-gray-400">{{ __('Discapacidade nota') }}</label>
                                {{$cidadan->discapacidadenota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Enderezo"
                                       class="block text-sm font-light text-gray-400">{{ __('Address') }}</label>
                                {{$cidadan->enderezo}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="exreclusa"
                                       class="block text-sm font-light text-gray-400">{{ __('exreclusa') }}</label>
                                {{$cidadan->exreclusa}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="exreclusanota"
                                       class="block text-sm font-light text-gray-400">{{ __('exreclusanota') }}</label>
                                {{$cidadan->exreclusanota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="gruposbusca"
                                       class="block text-sm font-light text-gray-400">{{ __('Grupos busca') }}</label>
                                {{$cidadan->gruposbusca}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="gruposbuscadata"
                                       class="block text-sm font-light text-gray-400">{{ __('grupos busca data') }}</label>
                                {{$cidadan->gruposbuscadata}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="habilidadessociais"
                                       class="block text-sm font-light text-gray-400">{{ __('Habilidades sociais') }}</label>
                                {{$cidadan->habilidadessociais}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="habilidades sociais nota"
                                       class="block text-sm font-light text-gray-400">{{ __('HS nota') }}</label>
                                {{$cidadan->habilidadessociaisdata}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Acepta LDOP"
                                       class="block text-sm font-light text-gray-400">{{ __('Acepta LDOP') }}</label>
                                {{$cidadan->lopd}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Nota baixa"
                                       class="block text-sm font-light text-gray-400">{{ __('Nota baixa') }}</label>
                                {{$cidadan->notabaja}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="observacions"
                                       class="block text-sm font-light text-gray-400">{{ __('Observacions') }}</label>
                                {{$cidadan->observacions}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Orientacion"
                                       class="block text-sm font-light text-gray-400">{{ __('Orientacion') }}</label>
                                {{$cidadan->orientacion}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="outrasexclusions"
                                       class="block text-sm font-light text-gray-400">{{ __('outras exclusions') }}</label>
                                {{$cidadan->outrasexclusions}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="outrasexclusions nota"
                                       class="block text-sm font-light text-gray-400">{{ __('OE nota') }}</label>
                                {{$cidadan->outrasexclusionsnota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="residenciadificilaccesibilidade"
                                       class="block text-sm font-light text-gray-400">{{ __('Residencia') }}</label>
                                {{$cidadan->residenciadificilaccesibilidade}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="residenciadificilaccesibilidadenota"
                                       class="block text-sm font-light text-gray-400">{{ __('Residencia nota') }}</label>
                                {{$cidadan->residenciadificilaccesibilidadenota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="responsabilidadesfamiliares"
                                       class="block text-sm font-light text-gray-400">{{ __('Resp. familiares') }}</label>
                                {{$cidadan->responsabilidadesfamiliares}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Resp. familiares nota"
                                       class="block text-sm font-light text-gray-400">{{ __('RF nota') }}</label>
                                {{$cidadan->responsabilidadesfamiliaresnota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="Sexo"
                                       class="block text-sm font-light text-gray-400">{{ __('Genre') }}</label>
                                {{$cidadan->sexo}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="spe"
                                       class="block text-sm font-light text-gray-400">{{ __('SPE') }}</label>
                                {{$cidadan->spe}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="tbe"
                                       class="block text-sm font-light text-gray-400">{{ __('TBE') }}</label>
                                {{$cidadan->tbe}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="tbedata"
                                       class="block text-sm font-light text-gray-400">{{ __('tbe data') }}</label>
                                {{$cidadan->tbedata}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="vehiculopropio"
                                       class="block text-sm font-light text-gray-400">{{ __('Vehículo propio') }}</label>
                                {{$cidadan->vehiculopropio}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="vo"
                                       class="block text-sm font-light text-gray-400">{{ __('vo') }}</label>
                                {{$cidadan->vo}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="vonota"
                                       class="block text-sm font-light text-gray-400">{{ __('vo nota') }}</label>
                                {{$cidadan->vonota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="accionsfe_id"
                                       class="block text-sm font-light text-gray-400">{{ __('accionsfe_id') }}</label>
                                {{$cidadan->accionsfe_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="canleacceso_id"
                                       class="block text-sm font-light text-gray-400">{{ __('canleacceso_id') }}</label>
                                {{$cidadan->canleacceso_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="datosoutros_id"
                                       class="block text-sm font-light text-gray-400">{{ __('datosoutros_id') }}</label>
                                {{$cidadan->datosoutros_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="disponibilidadexeografica_id"
                                       class="block text-sm font-light text-gray-400">{{ __('disponibilidadexeografica_id') }}</label>
                                {{$cidadan->disponibilidadexeografica_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="emigraciontype_id"
                                       class="block text-sm font-light text-gray-400">{{ __('emigraciontype_id') }}</label>
                                {{$cidadan->emigraciontype_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="interesaautoemprego_id"
                                       class="block text-sm font-light text-gray-400">{{ __('interesaautoemprego_id') }}</label>
                                {{$cidadan->interesaautoemprego_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="nacionalidade_id"
                                       class="block text-sm font-light text-gray-400">{{ __('nacionalidade_id') }}</label>
                                {{$cidadan->nacionalidade_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->operador_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->poboacion_idconcello}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->tipobaixa_id}} </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->vvx}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->vvxnota}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->updated_at}} </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="addiccionsnota"
                                       class="block text-sm font-light text-gray-400">{{ __('Adictions') }}</label>
                                {{$cidadan->created_at}}</div>
                </div>


                        {{-- <div class="w-full px-6 py-4">
                    <div class="min-w-full border-b border-gray-200 shadow">
                        <table class="table-fixed w-full text-sm">
                            <tbody class="bg-white dark:bg-slate-800">
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Name') }}</td>
                                         <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$cidadan->nome}}</td>
                            </tr>
<tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Email') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$cidadan->email}}</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Created') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$cidadan->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                         </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
