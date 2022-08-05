<x-app-layout>
    <x-slot name="header">
        
        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight">
            {{ __('Empresas') }}
        </h2>
</div>
            <div class="w-1/6 p-2 justify-end"></div>
            <div class="w-1/3 p-2 text-right"></div>
 </div>
    </x-slot>
{{--   codpostal,databaja,dataprimeirocontacto,email,enderezo,fax,localidade,nome,notabaja,numtrabajadores,observacions,outrarelacionconcelleria,tfnofijo,tfnomovil,web,actividade_id,centro_id,orientador_id,provincia_id  --}}
    
<div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 pt-4">
                    <h2 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pl-6 block sm:inline-block flex">{{ __('Empresa') }}</h2>
                    <a href="{{route('empresa.index')}}" class="mt-4 inline-block no-underline hover:underline text-cyan-600 dark:text-cyan-400">
 <abbr class="tooltip tooltip--right" data-tooltip="&nbsp; Volver">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            {{-- __('<< Back to all empresa') --}}</abbr>
    </a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4">
                    <div class="min-w-full"> {{-- border-b border-gray-200 shadow --}}
                        <div class="grid gap-x-8 gap-y-4 grid-cols-4">
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                            <label for="nome"
                                   class="block text-sm font-light text-gray-400">{{ __('Name') }}</label>
                                {{$empresa->nome}}
                            </div>
                             <div class="border-b-2 border-gray-400 pl-1 pr-3">
                        <label for="email"
                               class="block text-sm font-light text-gray-400">{{ __('Email') }}</label>
                                {{$empresa->email}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="codigopostal"
                                       class="block text-sm font-light text-gray-400">{{ __('CP') }}</label>
                                {{$empresa->codpostal}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                    <label for="localidade"
                           class="block text-sm font-light text-gray-400">{{ __('Localidade') }}</label>
                                {{$empresa->localidade}}
                            </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                <label for="telefono fixo"
                       class="block text-sm font-light text-gray-400">{{ __('Teléfono') }}</label>
                                {{$empresa->tfnofijo}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="telefono mobil"
                                       class="block text-sm font-light text-gray-400">{{ __('Móbil') }}</label>
                                {{$empresa->tfnomovil}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="dataprimeirocontacto"
                                       class="block text-sm font-light text-gray-400">{{ __('Contactado o') }}</label>
                                {{$empresa->dataprimeirocontacto}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="numtrabajadores"
                                       class="block text-sm font-light text-gray-400">{{ __('Nº traballadores') }}</label>
                                {{$empresa->numtrabajadores}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="enderezo"
                                       class="block text-sm font-light text-gray-400">{{ __('Enderezo') }}</label>
                                {{$empresa->enderezo}}
                            </div>

                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="databaja"
                                       class="block text-sm font-light text-gray-400">{{ __('Data baixa') }}</label>
                                {{$empresa->databaja}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="notabaja"
                                       class="block text-sm font-light text-gray-400">{{ __('Nota baixa') }}</label>
                                {{$empresa->notabaja}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="fax"
                                       class="block text-sm font-light text-gray-400">{{ __('Fax') }}</label>
                                {{$empresa->fax}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="outrarelacionconcelleria"
                                       class="block text-sm font-light text-gray-400">{{ __('Realación C') }}</label>
                                {{$empresa->outrarelacionconcelleria}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="web"
                                       class="block text-sm font-light text-gray-400">{{ __('Sitio web') }}</label>
                                {{$empresa->web}}
                            </div>
                            <div class="border-b-2 border-gray-400 pl-1 pr-3">
                                <label for="observacions"
                                       class="block text-sm font-light text-gray-400">{{ __('Observacións') }}</label>
                                {{$empresa->observacions}}
                            </div>
                            {{--  actividade_id,centro_id,orientador_id,provincia_id  --}}

                        </div>

                   {{--      <table class="table-fixed w-full text-sm">
                            <tbody class="bg-white dark:bg-slate-800">
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Name') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$empresa->nome}}</td>
                            </tr>
<tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Email') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$empresa->email}}</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Localidade') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$empresa->localidade}}</td>
                            </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>