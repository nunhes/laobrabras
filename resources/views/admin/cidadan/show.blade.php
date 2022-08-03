<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight">
                    {{ __('Cidadans') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end"></div>
            <div class="w-1/3 p-2 text-right"></div>
        </div>
    </x-slot>  {{-- addiccions,addiccionsnota,apel1,apel2,bial,codpostal,databaja,dataincorporacion,datanacemento,desempregadolongaduracion,desempregadolongaduracionnota,discapacidade,discapacidadenota,email,enderezo,exreclusa,exreclusanota,gruposbusca,gruposbuscadata,habilidadessociais,habilidadessociaisdata,lopd,nif,nome,notabaja,observacions,orientacion,outrasexclusions,outrasexclusionsnota,residenciadificilaccesibilidade,residenciadificilaccesibilidadenota,responsabilidadesfamiliares,responsabilidadesfamiliaresnota,sexo,spe,tbe,tbedata,tfno1,tfno2,vehiculopropio,vo,vonota,accionsfe_id,canleacceso_id,datosoutros_id,disponibilidadexeografica_id,emigraciontype_id,interesaautoemprego_id,nacionalidade_id,operador_id,poboacion_idconcello,tipobaixa_id,vvx,vvxnota) VALUES--}}

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 pt-4">
                    <h2 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pl-6 block sm:inline-block flex">{{ __('Cidadan') }}</h2>
                    <a href="{{route('cidadan.index')}}"
                       class="mt-4 inline-block no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                        <abbr class="tooltip tooltip--right" data-tooltip="&nbsp; Volver">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            {{-- __('<< Back to all cidadan') --}}</abbr></a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
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