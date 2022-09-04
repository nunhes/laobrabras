<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 p-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Actividades programadas') }}
                </h2>
            </div>

            <div class="w-1/2 items-center items-end">
                <div class="p-0 flex justify-end items-center">
                    <div class="d-print-none with-border mt-2 py-4">
                        <a href="{{ route('asuntos.create') }}" class="text-gray-500 justify-center">
                            <!-- compoñente tooltip -->
                            <div class="relative flex inline-flex flex-col items-center group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/>
                                </svg>
                                {{-- Add asunto --}}
                                <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                            class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('Create') }}</span>
                                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                </div>
                            </div>
                            <!-- end tooltip -->
                        </a>
                    </div>

                    <!-- search form -->
                    <form method="GET" action="{{ route('calendar.index') }}">
                        <div class="py-2 px-8 flex">
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

    <div class="py-2 mb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="p-2 pt-0 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-2">
                        <div class="py-2">
                            @include('messages')
                        </div>

                        <div class="min-w-full border-b border-gray-200 shadow">

                            <table class="border-collapse table-auto w-full text-sm">
                                <thead>
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                        @include('admin.includes.sort-link', ['label' => 'Actividade', 'attribute' => 'nome'])
                                    </th>

                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                        Descrición
                                    </th>

                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                        @include('admin.includes.sort-link', ['label' => 'Data', 'attribute' => 'datainicio'])
                                    </th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                        @include('admin.includes.sort-link', ['label' => 'Data fin', 'attribute' => 'datafin'])
                                    </th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                        @include('admin.includes.sort-link', ['label' => 'Código', 'attribute' => 'codigo'])
                                    </th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                        @include('admin.includes.sort-link', ['label' => 'Programa ID', 'attribute' => 'programa_id'])
                                    </th>

                                    <th colspan="2"
                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-right">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="bg-white">
                                @if($asuntos->count() > 0)
                                    @foreach($asuntos as $asunto)
                                        <tr>
                                        <!--td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <div class="flex items-center">
                                                                {{-- $asunto->id --}}
                                                </div>
                                            </td-->

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('asuntos.show', $asunto->id) }}"
                                                       class="no-underline hover:underline text-cyan-600 hover:text-gray-900"> {{ $asunto->nome }} </a>
                                                </div>
                                            </td>

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('asuntos.show', $asunto->id) }}"
                                                       class="no-underline hover:underline text-cyan-600 hover:text-gray-900"> {{Str::limit($asunto->description, 100)}} </a>
                                                </div>
                                            </td>

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('asuntos.show', $asunto->id) }}"
                                                       class="no-underline hover:underline text-cyan-600 hover:text-gray-900"> {{ $asunto->datainicio }} </a>
                                                </div>
                                            </td>

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('asuntos.show', $asunto->id) }}"
                                                       class="no-underline hover:underline text-cyan-600 hover:text-gray-900"> {{ $asunto->datafin }} </a>
                                                </div>
                                            </td>

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('asuntos.show', $asunto->id) }}"
                                                       class="no-underline hover:underline text-cyan-600 hover:text-gray-900"> {{ $asunto->codigo }} </a>
                                                </div>
                                            </td>

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 text-slate-500">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{ route('asuntos.show', $asunto->id) }}"
                                                       class="no-underline hover:underline text-cyan-600 hover:text-gray-900"> {{ $asunto->programa_id }} </a>
                                                </div>
                                            </td>

                                            <td class="border-b border-slate-100 p-1 py-2.5 pl-6 pr-3 text-slate-500">
                                                <div class="text-sm text-gray-900 text-right">
                                                    <a href="{{ route('asuntos.edit', $asunto->id) }}"
                                                       class="text-cyan-600 hover:text-indigo-900 px-2 py-2 text-cyan-600">
                                                        <!-- compoñente tooltip -->
                                                        <div
                                                                class="relative flex inline-flex flex-col items-center group">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="h-6 w-6" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor"
                                                                 stroke-width="2">
                                                                <path stroke-linecap="round"
                                                                      stroke-linejoin="round"
                                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                            </svg> {{-- __('Edit') --}}
                                                            <div
                                                                    class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                      <span
                                              class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                                        {{ __('Edit') }}</span>
                                                                <div
                                                                        class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                            </div>
                                                        </div>
                                                        <!-- end tooltip -->
                                                    </a>


                                                    <!-- svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a -->

                                                <!-- td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                                            <a href="{{-- route('asuntos.show', $asunto->id) --}}" class="text-gray-600 hover:text-gray-900">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                        </td -->
                                                </div>


                                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 pr-5">

                                                <form action="{{ route('asuntos.destroy', $asunto->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <!-- compoñente tooltip -->
                                                        <div
                                                                class="relative flex inline-flex flex-col items-center group text-red-600">
                                                            {{-- __('Delete') --}}
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="h-6 w-6" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor"
                                                                 stroke-width="2">
                                                                <path fill-rule="evenodd"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                                      clip-rule="evenodd"/>
                                                            </svg>
                                                            <div
                                                                    class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                      <span
                                              class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                                        {{ __('Delete') }}</span>
                                                                <div
                                                                        class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="px-4 py-12 whitespace-no-wrap border-b border-gray-200"
                                            colspan="7">
                                            <p class="text-center text-3xl text-gray-500 leading-tight">
                                                Actualmente non hai actividades que amosar!</p>
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="py-4 px-2">
                        <span class="uppercase py-2">{!! $asuntos->appends(Request::query())->links() !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
