<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/3 p-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Programar actividade') }}
                </h2>
            </div>

            <div class="p-2 items-center items-end">
                <a href="{{ route('asuntos.index') }}"
                   class="mt-3 inline-block no-underline uppercase text-cyan-600">
                    <!-- compoñente tooltip -->
                @include('admin.includes.tooltip')
                <!-- end tooltip -->
                </a>
            </div>
        </div>
    </x-slot>

    <!-- Create asunto -->
    <div class="py-2 mb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="flex items-center mt-3">
                    <div class="w-1/2 p-2">
                        <h2 class="inline-block text-1xl sm:text-2xl font-medium text-gray-400 tracking-tight py-4 pl-4 block sm:inline-block flex">
                            {{ __('Crear nova actividade')}}</h2>
                    </div>
                </div>

                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('asuntos.store') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2 py-1">
                                <label  class="block font-medium uppercase text-sm text-gray-400" for="nome">Nome
                                </label>
                                <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"/>
                                @error('nome')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="datainicio">
                                    Data início
                                </label>
                                <input type="date" value="{{ old('datainicio') }}" name="datainicio"
                                       min="2022-01-01"
                                       max="2030-01-01" placeholder=""
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"/>
                                @error('datainicio')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="datafin">
                                    Data finalización
                                </label>
                                <input type="date" value="{{ old('datafin') }}" name="datafin" min="2022-01-01"
                                       max="2030-01-01" placeholder=""
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"/>
                                @error('datafin')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Programa id -->
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="programa_id">
                                    Programa ID
                                </label>
                                <input type="text" value="{{ old('programa_id') }}" name="programa_id"
                                       placeholder=""
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('programa_id')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="codigo">
                                    Código
                                </label>
                                <input type="text" value="{{ old('codigo') }}" name="codigo"
                                       placeholder="Código"
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('codigo')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Coste -->
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="coste">
                                    Coste
                                </label>
                                <input type="text" value="{{ old('coste') }}" name="coste" placeholder="Coste"
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('coste')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Coste asociado -->
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="costeasoc">
                                    Coste asociado
                                </label>
                                <input type="text" value="{{ old('costeasoc') }}" name="costeasoc"
                                       placeholder="Coste asociado"
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('coste')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Matriculados total -->
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="nummatriculadostotal">
                                    Nº Matriculados Total
                                </label>
                                <input type="text" value="{{ old('nummatriculadostotal') }}"
                                       name="nummatriculadostotal"
                                       placeholder="Matriculados total"
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('nummatriculadostotal')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Matriculados web -->
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="nummatriculadosweb">
                                    Nº Matriculados Web
                                </label>
                                <input type="text" value="{{ old('nummatriculadosweb') }}"
                                       name="nummatriculadosweb"
                                       placeholder="Matriculados web"
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('nummatriculadosweb')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Sanitario -->
                            <div class="py-1">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="needssanitario">
                                    Necesidade sanitario
                                </label>
                                <input type="text" value="{{ old('needssanitario') }}" name="needssanitario"
                                       placeholder=""
                                       class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                                @error('needssanitario')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>


                            <!-- Descrición -->
                            <div class="py-1 col-span-4">
                                <label class="block font-medium uppercase text-sm text-gray-400" for="description">
                                    Descrición
                                </label>
                                <textarea name="description" placeholder="Descrición..."
                                          class="block w-full mt-1 border-gray-300 rounded-none shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                          rows="4" placeholder="400">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="inline-block mt-2 ml-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                            <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                                <button type='submit' class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Create') }}
                                </button>
                                <a href="{{ route('asuntos.index') }}" type="submit"
                                   class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-400 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
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
