<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-6">
            {{ __('Ofertas de traballo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 mr-3 block sm:inline-block flex">{{ __('View oferta de traballo') }}</h1>
                    <a href="{{route('oftraballo.index')}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400 mt-2">
 <!-- compoñente tooltip -->
                                                        <div class="relative flex inline-flex flex-col items-center group">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>

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
                    <div class="min-w-full border-b border-gray-200 shadow">


                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2 ...">
                                <label> {{ __('Posto') }}</label>
                                    {{$oftraballo->posto}}</td>
                            </div>
                            <div class="col-span-1 ...">
                                <label> {{ __('Prazas') }}</label>
                                    {{$oftraballo->numpostosofertados}}</td>
                            </div>
                            <div class="col-span-1 ...">
                                <label> {{ __('Data') }}</label>
                                    {{$oftraballo->data}}</td>
                            </div>
                            <div class="col-span-1 ...">
                                <label> {{ __('Meses') }}</label>
                                    {{$oftraballo->nummeses}}</td>
                            </div>
                            <div class="col-span-1 ...">
                                <label> {{ __('Empresa') }}</label>
                                    {{$oftraballo->id_empresa}}</td></div>
                            <div class="col-span-1 ...">
                                <label> {{ __('Name') }}</label>
                                {{$oftraballo->posto}}</td>
                            </div>
                            <div class="col-span-1 ...">
                                <label> {{ __('Name') }}</label>
                                    {{$oftraballo->posto}}</td>
                            </div>
                          </div>





                     {{--   <table class="table-fixed w-full text-sm">
                            <tbody class="bg-white dark:bg-slate-800">
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                   <label> {{ __('Name') }}</label>
                                    {{$oftraballo->posto}}</td>
                            </tr>
<tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Data') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$oftraballo->numpostosofertados}}</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ __('Created') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$oftraballo->created_at}}</td>
                            </tr>

                            </tbody>
                        </table>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
