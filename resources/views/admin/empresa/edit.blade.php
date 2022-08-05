<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight">
            {{ __('Empresas') }}
        </h2></div>
            <div class="w-1/6 p-2 justify-end"></div>
            <div class="w-1/3 p-2 text-right"></div>
 </div>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">




<div class="container mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nome">
        Nome
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red-800 rounded py-3 px-4 mb-3" id="nome" type="text" placeholder="Nome da empresa">
    </div>
    <div class="md:w-1/3 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Localidade
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="localidade" type="text" placeholder="Localidade">
    </div>
      <div class="md:w-1/3 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              Localidade
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="codpostal" type="text" placeholder="Código Postal">
      </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Password
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" placeholder="******************">
      <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
    </div>
  </div>
  <div class="-mx-3 md:flex mb-2">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
        City
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" placeholder="Albuquerque">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
        State
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
          <option>New Mexico</option>
          <option>Missouri</option>
          <option>Texas</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
        Zip
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" placeholder="90210">
    </div>
  </div>
</div>





                <div class="p-0 pt-4">
                    <h2 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pl-6  block sm:inline-block flex">{{ __('Update empresa') }}</h2>
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
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('empresa.update', $empresa->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="py-2">
                            <label for="name" class="block font-medium text-sm text-gray-700{{$errors->has('name') ? ' text-red-400' : ''}}">{{ __('Name') }}</label>
                            <input id="name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-red-400' : ''}}"
                                   type="text"
                                   name="name"
                                   value="{{ old('name', $empresa->name) }}"
                            />
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type='submit' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>