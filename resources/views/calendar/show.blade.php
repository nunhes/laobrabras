<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/4 p-2">
                <h2 class="font-semibold text-xl pl-4 pt-2 leading-tight uppercase">
                    {{ __('Datos da actividade') }}
                </h2>
            </div>

            <div class="w-1/6 p-2">
                <a href="{{ route('asuntos.index') }}" class="no-underline hover:underline text-cyan-600">
                    <!-- compoñente tooltip -->
                    <div class="relative flex inline-flex flex-col items-center group pl-4">
            <span class="items-center mt-4"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
              </svg></span>
                        <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
              <span
                  class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{ __('Back') }}</span>
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                    </div>
                    <!-- end tooltip -->
                </a></div>
            <div class="w-1/3 p-2 text-right">&nbsp; </div>
        </div>
    </x-slot>

    <!-- Show Asunto -->
    <div class="py-4 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="flex items-center mt-3">
                    <div class="w-1/2 p-2">
                        <h2 class="inline-block text-1xl sm:text-2xl font-medium text-gray-400 tracking-tight py-4 pl-4 block sm:inline-block flex">
                            {{ __('Ver actividade ') }}  <span class="text-cyan-600"> {{ $asunto->id }} </span> </h2>
                </div>

                    <div class="w-1/2 p-2 justify-end">
                        {{-- @canany(['oftraballo edit', 'oftraballo delete'])--}}
                            <div class="p-1 pl-8 text-slate-500 text-right">
                                <!-- volver -->
                                <a href="{{ route('asuntos.index') }}"
                                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                                    <!-- compoñente tooltip -->
                                @include('admin.includes.tooltip')
                                <!-- end tooltip -->
                                </a>
                                <!-- editar/borrar -->
                                <form action="{{ route('asuntos.destroy', $asunto->id) }}" method="POST"
                                      class="flex inline-flex">
                                    {{-- @can('permission edit') --}}
                                        <a href="{{ route('asuntos.edit', $asunto->id) }}"
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
                                   {{--  @endcan
                                    @can('asuntos delete')--}}
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
                                    {{--@endcan --}}
                                </form>
                            </div>
                        {{-- @endcanany --}}
                    </div>
                </div>

                <div class="w-full px-6 py-4">
                    <div class="min-w-full">
                        <div class="grid grid-cols-4 gap-4 mb-10">
                            <div class="col-span-3 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Actividade') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->nome }}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data de inicio:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->datainicio }}</div>
                               {{-- <span class="text-xs text-gray-500">Created by {{ Auth::user()->name }}</span> --}}
                            </div>
                            <div class="col-span-4 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Description') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">
                            {!! nl2br($asunto->description) !!}</div>
                            </div>
                            <div class="border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Código:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->codigo }}</div>
                            </div>
                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Coste:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->coste }}</div>
                            </div>
                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Coste asociado:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->costeasoc }}</div>
                            </div>
                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data finalización:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->datafin }}</div>
                            </div>

                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Nº Matriculados Total:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->nummatriculadostotal}}</div>
                            </div>

                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Nº Matriculados Web:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->nummatriculadosweb}}</div>
                            </div>

                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Necesidade sanitario:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->needssanitario}}</div>
                            </div>

                            <div class="col-span-1 border-b border-gray-200 shadow">
                                <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Programa ID:') }}</label>
                                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $asunto->programa_id}}</div>
                            </div>

                        </div>
                    <!-- /form -->
                </div>

            </div>
        </div>

    </div>

</x-app-layout>
