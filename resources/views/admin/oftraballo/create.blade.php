<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
                    {{ __('Ofertas de traballo') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                </div>
            </div>
            <div class="w-1/3 p-2 text-right">
                <!-- search form --
                <form method="GET" action="{ route('oftraballo.index') }">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{ request()->input('search') }"
                                   class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="{__('Search') }">
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
                !-- end search form -->
            </div>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">{{ __('Create oferta de traballo') }}</h1>
                    <a href="{{ route('oftraballo.index' )}}"
                       class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">
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

                {{-- `id`, `data`, `nummeses`, `numpostosofertados`, `observacions`, ``, `accionsfe_id`, `id_empresa`, `categoriaprofesional_id`, `estudiosminimos`, `created_at`, `updated_at` --}}

                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('oftraballo.store') }}">
                        @csrf
                        <div class="grid grid-cols-3 gap-4">
                            <div class="grid col-span-2 py-1">
                                <label for="posto"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('posto') ? ' text-red-400' : ''}}">{{ __('Posto') }}</label>
                                <input id="posto"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50{{$errors->has('posto') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="posto"
                                       value="{{ old('posto') }}"/>
                            </div>

                            <div class=" py-1">
                                <label for="data"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Data') }}</label>
                                <input id="data"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('data') ? ' border-red-400' : ''}}"
                                       type="date"
                                       name="data"
                                       value="{{ old('data'->date->format('Y-m-d')) }}"
                                />
                            </div>
                            <div class="py-1">
                                <label for="nummeses"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Nº Meses') }}</label>
                                <input id="nummeses"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('nummeses') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="nummeses"
                                       value="{{ old('nummeses') }}"
                                />
                            </div>

                            <div class="py-1">
                                <label for="numpostosofertados"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Postos ofertados') }}</label>
                                <input id="numpostosofertados"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('numpostosofertados') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="numpostosofertados"
                                       value="{{ old('numpostosofertados') }}"
                                />
                            </div>


                            <div class="py-2">
                                <label for="estudiosminimos"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('estudiosminimos') ? ' text-red-400' : ''}}">{{ __('estudiosminimos') }}</label>
                                <input id="estudiosminimos"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('estudiosminimos') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="estudiosminimos"
                                       value="{{ old('estudiosminimos') }}"
                                />
                            </div>

                            <div class="py-2 col-span-3">
                                <label for="observacions"
                                       class="block text-sm font-medium uppercase text-gray-400">{{ __('Observacións') }}</label>
                                <textarea id="observacions" rows="4" cols="80"
                                          class="p-2.5 text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="{{ old('observacions') }}"></textarea>
                            </div>

                            <div class="py-2">
                                <label for="accionsfe_id"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('AccionsFE ID') }}</label>
                                <input id="accionsfe_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('accionsfe_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="accionsfe_id"
                                       value="{{ old('accionsfe_id') }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="id_empresa"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('id_empresa') ? ' text-red-400' : ''}}">{{ __('id empresa') }}</label>
                                <input id="id_empresa"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('id_empresa') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="id_empresa"
                                       value="{{ old('id_empresa') }}"
                                />
                            </div>

                            <div class="py-2">
                                <label for="catagoriaprofesional_id"
                                           class="block font-medium uppercase text-sm text-gray-400{{$errors->has('catagoriaprofesional_id') ? ' text-red-400' : ''}}">{{ __('categoriaprofesional_id') }}</label>
                                <input id="catagoriaprofesional_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{$errors->has('catagoriaprofesional_id') ? ' border-red-400' : ''}}"
                                       type="text"
                                       name="catagoriaprofesional_id"
                                       value="{{ old('catagoriaprofesional_id') }}"
                                />
                            </div>

                        </div>

                        <div class="flex justify-end mt-4">
                            <button type='submit'
                                    class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                {{ __('Create') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
