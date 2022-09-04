<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center">
      <div class="w-1/2 p-2">
        <h2 class="font-semibold text-xl pl-4 pt-2 leading-tight uppercase">
          {{ __('Oferta de traballo') }}
        </h2>
      </div>

      <div class="w-1/2 items-center items-end">
          <div class="p-0 flex justify-end items-center">
          @can('oftraballo create')
            <div class="d-print-none with-border mt-2 py-4">
              <a href="{{ route('oftraballo.create') }}" class="text-gray-500 justify-center">
                <!-- compoñente tooltip -->
                <div class="relative flex inline-flex flex-col items-center group">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                  </svg>
                  {{-- __('Add Oferta') --}}
                  <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{ __('Oferta') }}</span>
                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                  </div>
                </div>
                <!-- end tooltip -->
              </a>
            </div>
          @endcan

        <!-- search form -->
        <form method="GET" action="{{ route('oftraballo.index') }}">
          <div class="py-2 pl-8 flex">
            <div class="overflow-hidden flex py-4">
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
    </div>
  </x-slot>

  <div class="py-4 mb-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
          <div class="flex items-center mt-3">
              <div class="w-1/2 p-2">
                  <h2 class="inline-block text-1xl sm:text-2xl font-medium text-gray-400 tracking-tight py-4 pl-4 block sm:inline-block flex">
                      {{ __('Oferta de traballo') }}  <span class="text-cyan-600">{{ $oftraballo->id }} </span> </h2>

          {{-- @if ($errors->any())
            <ul class="mt-3 list-none list-inside text-sm text-red-400">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif --}}
        </div>
              <div class="w-1/2 p-2 justify-end">
                  @canany(['oftraballo edit', 'oftraballo delete'])
                      <div class="p-1 pl-8 text-slate-500 text-right">
                          <!-- volver -->
                          <a href="{{ route('oftraballo.index') }}"
                             class="mt-3 inline-block no-underline uppercase text-cyan-600">
                              <!-- compoñente tooltip -->
                          @include('admin.includes.tooltip')
                          <!-- end tooltip -->
                          </a>
                          <!-- editar/borrar -->
                          <form action="{{ route('oftraballo.destroy', $oftraballo->id) }}" method="POST"
                                class="flex inline-flex">
                              @can('permission edit')
                                  <a href="{{ route('oftraballo.edit', $oftraballo->id) }}"
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
                              @can('oftraballo delete')
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
              <div class="col-span-2 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Posto') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->posto }}</div>
              </div>
              <div class="border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Prazas') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->numpostosofertados }}</div>
              </div>
              <div class="border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Data') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->data }}</div>
              </div>
              <div class="col-span-1 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Nº Meses') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->nummeses }}</div>
              </div>
              <div class="col-span-1 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Empresa') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900"> <a href="{{ route('empresa.show', $oftraballo->id_empresa) }}"
                                                                     class="px-2 py-2 text-cyan-600">{{ $oftraballo->id_empresa }}</a></div>
              </div>
              <div class="col-span-2 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Observacións') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->observacions }}</div>
              </div>
              <div class="col-span-1 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Accións FE') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->accionsfe_id }}</div>
              </div>
              <div class="col-span-1 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Cat.Profesional') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->categoriaprofesional_id }}</div>
              </div>
              <div class="col-span-1 border-b border-gray-200 shadow">
                  <label class="block uppercase text-sm text-slate-400 py-1 px-4">{{ __('Estudos mínimos') }}</label>
                <div class="py-2 px-4 bg-gray-100 text-blue-900">{{ $oftraballo->estudiosminimos }}</div>
              </div>
            </div>
          </div><!-- end grid-->
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
