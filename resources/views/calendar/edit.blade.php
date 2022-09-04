<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/3 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
                    {{ __('Calendario de actividades') }}
                </h2>
            </div>

            <div class="w-1/2 p-2">
                <a href="{{route('asuntos.index')}}"
                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                    <!-- compoñente tooltip -->
                @include('admin.includes.tooltip')
                <!-- end tooltip -->
                </a>
            </div>
            <div class="w-1/3 p-2 text-right">
&nbsp;        </div>
        </div>
    </x-slot>

    <!-- Editar Asunto -->
    <div class="py-2 mb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="py-2 px-6">
                    <h2
                        class="text-xl sm:text-xl font-medium text-gray-400 tracking-tight pt-6 block">
                        Editar actividade <span class="text-cyan-600">{{$asunto->id}}</span>
                    </h2>
                    <!-- div class="bg-gray-100 px-4 mt-1">
                        @if ($errors->any())
                            <ul class="mt-3 list-none list-inside text-base text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div -->
                </div>

                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('asuntos.update',$asunto) }}">
                        {{ csrf_field() }}
                        @method('put')

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

                        <!-- Nome -->
                        <div class="grid grid-cols-6 gap-4">
                            <div class="py-2 col-span-3">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="nome">
                                Nome
                            </label>
                            <input type="text" name="nome" value="{{old('nome', $asunto->nome)}}" placeholder="Nome" class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            @error('nome')
                                    <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Data inicio -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="datainicio">
                                Data início
                            </label>
                            <input type="date" value="{{old('datainicio', $asunto->datainicio)}}" name="datainicio"  min="2022-01-01" max="2030-01-01" class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            @error('datainicio')
                                    <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                            <!-- Data fin -->
                            <div class="py-2">
                                <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="datafin">
                                    Data finalización
                                </label>
                                <input type="date" value="{{ old('datafin', $asunto->datafin) }}" name="datafin" min="2022-01-01" max="2030-01-01" class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('datafin')
                                <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        <!-- Codigo -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="codigo">
                                Código
                            </label>
                            <input type="text" value="{{ old('codigo', $asunto->codigo) }}" name="codigo" placeholder="Código"
                                   class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            @error('codigo')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                            <!-- Body -->
                            <div class="py-2 col-span-6">
                                <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="description">
                                    Descrición
                                </label>
                                <textarea name="description" placeholder="Descrición..." class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="4" placeholder="400">{{old('description', $asunto->description)}}</textarea>
                                @error('description')
                                <p class="inline-block min-w-full mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        <!-- Coste -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="coste">
                                Coste
                            </label>
                            <input type="text" value="{{ old('coste', $asunto->coste) }}" name="coste" placeholder="Coste"
                                   class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            @error('coste')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Coste asociado -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="password">
                                Coste asociado
                            </label>
                            <input type="text" value="{{ old('costeasoc', $asunto->costeasoc) }}" name="costeasoc"
                                   placeholder="Coste asociado"
                                   class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            @error('costeasoc')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Matriculados total -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="nummatriculadostotal">
                                Nº Matriculados Total
                            </label>
                            <input type="text" value="{{ old('nummatriculadostotal', $asunto->nummatriculadostotal) }}" name="nummatriculadostotal"
                                   placeholder="Matriculados total"
                                   class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numprazas') ? ' border-red-400' : '' }}"/>
                            @error('nummatriculadostotal')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Matriculados web -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="nummatriculadosweb">
                                Nº Matriculados Web
                            </label>
                            <input type="text" value="{{ old('nummatriculadosweb', $asunto->nummatriculadosweb) }}" name="nummatriculadosweb"
                                   placeholder=">Matriculados web"
                                   class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numprazas') ? ' border-red-400' : '' }}"/>
                            @error('nummatriculadosweb')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Sanitario -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="needssanitario">
                                Necesidade sanitario
                            </label>
                            <input type="text" value="{{ old('needssanitario', $asunto->needssanitario) }}" name="needssanitario" placeholder=""
                                   class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numprazas') ? ' border-red-400' : '' }}"/>
                            @error('needssanitario')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Programa id -->
                        <div class="py-2">
                            <label class="block uppercase font-medium text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}" for="programa_id">
                                Programa ID
                            </label>
                            <input type="text" value="{{ old('programa_id', $asunto->programa_id) }}" name="programa_id" placeholder=""
                                   class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('numprazas') ? ' border-red-400' : '' }}"/>
                            @error('programa_id')
                            <p class="inline-block mt-2 ml-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        </div> <!-- end grid -->

                        <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type="submit" class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Update') }}
                            </button>
                            <a href="{{ route('asuntos.index') }}" type="submit" class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-400 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
