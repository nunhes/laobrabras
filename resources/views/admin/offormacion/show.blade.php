<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
        <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
            {{ __('Ofertas de formación') }}
        </h2>
    </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                        @can('offormacion create')
                            <div class="d-print-none with-border mt-2 p-0">
                                <a href="{{ route('offormacion.create') }}"
class="text-gray-500 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
                                    <!-- compoñente tooltip -->
                                    <div class="relative flex inline-flex flex-col items-center group">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        {{-- __('Add Oferta') --}}
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
                                <form method="GET" action="{{ route('offormacion.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}"
class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search{{__('Search') }}">
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
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Oferta de formacion') }}</h1>
                    <a href="{{route('offormacion.index')}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                        <!-- compoñente tooltip -->
                        <div class="relative flex inline-flex flex-col items-center group">
                            <span class="items-center mt-4"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>
                            {{--  __('<< Back to all offormacion') --}}

                            <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{__('Back') }}</span>
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
                <div class="w-full px-6 py-4">
                    <div class="min-w-full">

                    {{--    `id`, `dataata`, `datadende`, `lugar`, `nome`, `numhoras`, `numprazas`, `tipo`, `accionsfe_id`, `id_empresa`, `created_at`, `updated_at` --}}
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2 border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Posto</label>
                                {{$offormacion->nome}}</div>
                            <div class="border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Lugar</label>
                                {{$offormacion->lugar}}</div>
                            <div class="border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Dende o</label>
                                {{$offormacion->datadende}}</div>
                            <div class="col-span-2 border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Ata o</label>
                                {{$offormacion->dataata}}</div>
                            <div class="border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Nº horas</label>
                                {{$offormacion->numhoras}}</div>
                            <div class="border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Prazas</label>
                                {{$offormacion->numprazas}}</div>
                            <div class="col-span-2 border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Tipo</label>
                                {{$offormacion->tipo}}</div>
                            <div class="col-span-2 border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Empresa</label>
                                {{$offormacion->id_empresa}}</div>
                            <div class="col-span-2 border-b border-gray-200 shadow py-1 px-4">
                                <label class="block uppercase text-sm text-slate-400">Publicada</label>
                                {{$offormacion->created_at}}</div>


                                {{--  `accionsfe_id`, `id_empresa`, `created_at`, `updated_at`   --}}
                         </div>



                        {{-- <table class="table-fixed w-full text-sm">
                            <tbody class="bg-white dark:bg-slate-800">
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Name') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$offormacion->name}}</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Created') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$offormacion->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
