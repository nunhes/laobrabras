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
                    {{--   @can('cidadan create')
                           <div class="d-print-none with-border mt-2 p-0">
                               <a href="{{ route('cidadan.create') }}"
class="text-gray-500 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
{{-<abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; + Persoa">
<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
{{- __('Add Cidadan') -}}</abbr>-}}
<!-- compoñente tooltip -->
<div class="relative flex inline-flex flex-col items-center group">
   <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
{{- __('Create') -}}
   <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
       <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Create') }}</span>
       <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
</div>
</div>
<!-- end tooltip -->



</a>
                           </div>
                       @endcan  --}}
                </div>

            </div>
            <div class="w-1/3 p-2 text-right">
                <!-- search form -->

                <form method="GET" action="{{ route('cidadan.index') }}">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{{ request()->input('search') }}"
                                   class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="{{ __('Search') }}">
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
    {{-- addiccions,addiccionsnota,apel1,apel2,bial,codpostal,databaja,dataincorporacion,datanacemento,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,email,enderezo,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,nif,nome,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,sexo,spe,tbe,tbedata,tfno1,tfno2,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota) VALUES--}}

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pr-4-6 block sm:inline-block flex">{{ __('Update cidadan') }}</h1>
                    <a href="{{ route('cidadan.index' )}}"
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
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('cidadan.update', $cidadan->id) }}">
                    @csrf
                    @method('PUT')
                    <!-- div class="py-2">
                            <label for="name" class="block font-medium uppercase text-sm text-gray-400{ { $errors->has('name') ? ' text-red-400' : ''} }">{ { __('Name') } }</label>
                            <input id="name" class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{ {$errors->has('name') ? ' border-red-400' : ''} }"
                                   type="text"
                                   name="name"
                                   value="{ { old('name', $cidadan->apel1) } }"
                            />
                        </div-->

                        {{-- addiccions,addiccionsnota,bial,,databaja,,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,spe,tbe,tbedata,,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota --}}

                        <div class="grid grid-cols-6 gap-4">
                            <div class="..."><label for="nome"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('nome') ? ' text-red-400' : ''}}">{{ __('Nome') }}</label>
                                <input id="nome"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="nome"
                                       value="{{ old('nome', $cidadan->nome) }}"
                                /></div>
                            <div class="..."><label for="apel1"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('apel1') ? ' text-red-400' : ''}}">{{ __('Apelido1') }}</label>
                                <input id="apel1"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('apel1') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="apel1"
                                       value="{{ old('apel1', $cidadan->apel1) }}"
                                /></div>
                            <div class="..."><label for="apel2"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('apel2') ? ' text-red-400' : ''}}">{{ __('Apelido2') }}</label>
                                <input id="apel2"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('apel2') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="apel2"
                                       value="{{ old('apel2', $cidadan->apel2) }}"
                                /></div>
                            <div class="..."><label for="nif"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('nif') ? ' text-red-400' : ''}}">{{ __('NIF') }}</label>
                                <input id="nif"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('nif') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="nif"
                                       value="{{ old('nif', $cidadan->nif) }}"
                                /></div>
                            <div class="..."><label for="datanacemento"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('datanacemento') ? ' text-red-400' : ''}}">{{ __('Data nacemento') }}</label>
                                <input id="datanacemento"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('datanacemento') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="datanacemento"
                                       value="{{ old('datanacemento', $cidadan->datanacemento) }}"
                                /></div>

                            <div class="..."><label for="dataincorporacion"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('dataincorporacion') ? ' text-red-400' : ''}}">{{ __('Data incorporación') }}</label>
                                <input id="dataincorporacion"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('dataincorporacion') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="dataincorporacion"
                                       value="{{ old('dataincorporacion', $cidadan->dataincorporacion) }}"
                                /></div>

                            <div class="col-span-2 ..."><label for="enderezo"
                                                               class="block font-medium uppercase text-sm text-gray-400{{$errors->has('enderezo') ? ' text-red-400' : ''}}">{{ __('Enderezo') }}</label>
                                <input id="enderezo"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('enderezo') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="enderezo"
                                       value="{{ old('enderezo', $cidadan->enderezo) }}"
                                /></div>
                            <div class="col-span-2 ...">
                                <label for="name"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('email') ? ' text-red-400' : ''}}">{{ __('Email') }}</label>
                                <input id="email"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('email') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="email"
                                       value="{{ old('email', $cidadan->email) }}"
                                /></div>
                            <div class="..."><label for="tfno1"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('tfno1') ? ' text-red-400' : ''}}">{{ __('Teléfono1') }}</label>
                                <input id="tfno1"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('tfno1') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="tfno1"
                                       value="{{ old('tfno1', $cidadan->tfno1) }}"
                                />
                            </div>
                            <div class="..."><label for="tfno2"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('tfno2') ? ' text-red-400' : ''}}">{{ __('Teléfono2') }}</label>
                                <input id="tfno2"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('tfno2') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="tfno2"
                                       value="{{ old('tfno2', $cidadan->tfno2) }}"
                                />
                            </div>
                            <div class="..."><label for="codpostal"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Postal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal', $cidadan->codpostal) }}"
                                /></div>

                            addiccions,addiccionsnota,bial,,databaja,,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,spe,tbe,tbedata,,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota --}}

                            <div class="..."><label for="codpostal"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Pstal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal', $cidadan->codpostal) }}"
                                /></div>
                            <div class="..."><label for="codpostal"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Pstal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal', $cidadan->codpostal) }}"
                                /></div>
                            <div class="..."><label for="codpostal"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Pstal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal', $cidadan->codpostal) }}"
                                /></div>
                            <div class="..."><label for="codpostal"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Pstal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal', $cidadan->codpostal) }}"
                                /></div>
                            <div class="..."><label for="codpostal"
                                                    class="block font-medium uppercase text-sm text-gray-400{{$errors->has('codpostal') ? ' text-red-400' : ''}}">{{ __('Código Pstal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('codpostal') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="codpostal"
                                       value="{{ old('codpostal', $cidadan->codpostal) }}"
                                /></div>


                        </div>
                        <!-- fin grid -->

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
