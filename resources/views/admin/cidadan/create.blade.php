<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="px-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Nova persoa') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end"><a href="{{ route('cidadan.index') }}"
                                                  class="mt-3 inline-block no-underline uppercase text-cyan-600">
                    <!-- compoñente tooltip -->
                @include('admin.includes.tooltip')
                <!-- end tooltip -->
                </a></div>
            <div class="w-1/3 p-2 text-right">&nbsp;</div>
        </div>
    </x-slot>

    <div class="py-4 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
                <div class="py-2 px-6">
                    <h2
                        class="inline-block text-xl sm:text-xl font-medium text-gray-400 tracking-tight py-4 mr-3 block sm:inline-block flex">
                        {{ __('Datos dun novo cidadan') }}</h2>
                    <div class="bg-gray-100 px-4 mt-1">
                        @if ($errors->any())
                            <ul class="list-none list-inside text-sm text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li class="flex items-center py-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>&nbsp; {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('cidadan.store') }}">
                    @csrf


                    <!-- <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                      <form>

                        <div class="row">
                          <div class="col-md-6 mb-4">

                            <div class="form-outline">
                              <input type="text" id="firstName" class="form-control form-control-lg" />
                              <label class="form-label" for="firstName">First Name</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4">

                            <div class="form-outline">
                              <input type="text" id="lastName" class="form-control form-control-lg" />
                              <label class="form-label" for="lastName">Last Name</label>
                            </div>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline datepicker w-100">
                              <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                              <label for="birthdayDate" class="form-label">Birthday</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4">

                            <h6 class="mb-2 pb-1">Gender: </h6>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1" checked />
                              <label class="form-check-label" for="femaleGender">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                              <label class="form-check-label" for="maleGender">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                value="option3" />
                              <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="email" id="emailAddress" class="form-control form-control-lg" />
                              <label class="form-label" for="emailAddress">Email</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                              <label class="form-label" for="phoneNumber">Phone
                                Number</label>
                            </div>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12">

                            <select class="select form-control-lg">
                              <option value="1" disabled>Choose option</option>
                              <option value="2">Subject 1</option>
                              <option value="3">Subject 2</option>
                              <option value="4">Subject 3</option>
                            </select>
                            <label class="form-label select-label">Choose option</label>

                          </div>
                        </div>

                        <div class="mt-4 pt-2">
                          <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->


                        <div class="grid grid-cols-6 gap-4">
                            <div class="py-1"><label for="nome"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('nome') ? ' text-red-400' : '' }}">{{ __('Nome') }}</label>
                                <input id="nome"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('name') ? ' border-red-400' : '' }}"
                                       type="text" name="nome" value="{{ old('nome') }}"/>
                            </div>
                            <div class="py-1"><label for="apel1"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('apel1') ? ' text-red-400' : '' }}">{{ __('Apelido1') }}</label>
                                <input id="apel1"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('apel1') ? ' border-red-400' : '' }}"
                                       type="text" name="apel1" value="{{ old('apel1') }}"/>
                            </div>
                            <div class="py-1"><label for="apel2"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('apel2') ? ' text-red-400' : '' }}">{{ __('Apelido2') }}</label>
                                <input id="apel2"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('apel2') ? ' border-red-400' : '' }}"
                                       type="text" name="apel2" value="{{ old('apel2') }}"/>
                            </div>
                            <div class="py-1"><label for="nif"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('nif') ? ' text-red-400' : '' }}">{{ __('NIF') }}</label>
                                <input id="nif"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('nif') ? ' border-red-400' : '' }}"
                                       type="text" name="nif" value="{{ old('nif') }}"/>
                            </div>
                            <div class="py-1"><label for="datanacemento"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('datanacemento') ? ' text-red-400' : '' }}">{{ __('Data nacemento') }}</label>
                                <input id="datanacemento"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('datanacemento') ? ' border-red-400' : '' }}"
                                       type="date" name="datanacemento" value="{{ old('datanacemento') }}"/>
                            </div>

                            <div class="py-1"><label for="dataincorporacion"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('dataincorporacion') ? ' text-red-400' : '' }}">{{ __('Data incorporación') }}</label>
                                <input id="dataincorporacion"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('dataincorporacion') ? ' border-red-400' : '' }}"
                                       type="date" name="dataincorporacion"
                                       value="{{ old('dataincorporacion') }}"/>
                            </div>

                            <div class="col-span-2 py-1"><label for="enderezo"
                                                                class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('enderezo') ? ' text-red-400' : '' }}">{{ __('Enderezo') }}</label>
                                <input id="enderezo"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('enderezo') ? ' border-red-400' : '' }}"
                                       type="text" name="enderezo" value="{{ old('enderezo') }}"/>
                            </div>
                            <div class="col-span-2 py-1">
                                <label for="email"
                                       class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('email') ? ' text-red-400' : '' }}">{{ __('Email') }}</label>
                                <input id="email"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('email') ? ' border-red-400' : '' }}"
                                       type="text" name="email" value="{{ old('email') }}"/>
                            </div>
                            <div class="py-1"><label for="tfno1"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('tfno1') ? ' text-red-400' : '' }}">{{ __('Teléfono1') }}</label>
                                <input id="tfno1"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('tfno1') ? ' border-red-400' : '' }}"
                                       type="text" name="tfno1" value="{{ old('tfno1') }}"/>
                            </div>
                            <div class="py-1"><label for="tfno2"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('tfno2') ? ' text-red-400' : '' }}">{{ __('Teléfono2') }}</label>
                                <input id="tfno2"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('tfno2') ? ' border-red-400' : '' }}"
                                       type="text" name="tfno2" value="{{ old('tfno2') }}"/>
                            </div>
                            <div class="py-1"><label for="codpostal"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('codpostal') ? ' text-red-400' : '' }}">{{ __('Código Postal') }}</label>
                                <input id="codpostal"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('codpostal') ? ' border-red-400' : '' }}"
                                       type="text" name="codpostal" value="{{ old('codpostal') }}"/>
                            </div>


                            <div class="py-1"><label for="bial"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('bial') ? ' text-red-400' : '' }}">{{ __('BIAL') }}</label>
                                <input id="bial"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('bial') ? ' border-red-400' : '' }}"
                                       type="text" name="bial" value="{{ old('codpostal') }}"/>
                            </div>
                            <div class="py-1"><label for="lopd"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('lopd') ? ' text-red-400' : '' }}">{{ __('lopd') }}</label>
                                <input id="lopd"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('lopd') ? ' border-red-400' : '' }}"
                                       type="text" name="lopd" value="{{ old('codpostal') }}"/>
                            </div>
                            <div class="py-1"><label for="spe"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('spe') ? ' text-red-400' : '' }}">{{ __('spe') }}</label>
                                <input id="spe"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('spe') ? ' border-red-400' : '' }}"
                                       type="text" name="spe" value="{{ old('spe') }}"/>
                            </div>

                            <div class="py-1"><label for="tbe"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('tbe') ? ' text-red-400' : '' }}">{{ __('tbe') }}</label>
                                <input id="tbe"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('tbe') ? ' border-red-400' : '' }}"
                                       type="text" name="tbe" value="{{ old('tbe') }}"/>
                            </div>

                            <div class="py-1"><label for="tbedata"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('tbedata') ? ' text-red-400' : '' }}">{{ __('tbe data') }}</label>
                                <input id="tbedata"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('tbedata') ? ' border-red-400' : '' }}"
                                       type="text" name="tbedata" value="{{ old('tbedata') }}"/>
                            </div>


                            <div class="py-1"><label for="habilidadessociais"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('habilidadessociais') ? ' text-red-400' : '' }}">{{ __('habilidades sociais') }}</label>
                                <input id="habilidadessociais"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('habilidadessociais') ? ' border-red-400' : '' }}"
                                       type="text" name="habilidadessociais" value="{{ old('habilidadessociais') }}"/>
                            </div>
                            <div class="py-1"><label for="habilidadessociaisdata"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('habilidadessociaisdata') ? ' text-red-400' : '' }}">{{ __('hh. ss. data') }}</label>
                                <input id="habilidadessociaisdata"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('habilidadessociaisdata') ? ' border-red-400' : '' }}"
                                       type="text" name="habilidadessociaisdata"
                                       value="{{ old('habilidadessociaisdata') }}"/>
                            </div>

                            <div class="py-1"><label for="gruposbusca"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('gruposbusca') ? ' text-red-400' : '' }}">{{ __('grupos busca') }}</label>
                                <input id="gruposbusca"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('gruposbusca') ? ' border-red-400' : '' }}"
                                       type="text" name="gruposbusca" value="{{ old('gruposbusca') }}"/>
                            </div>
                            <div class="py-1"><label for="gruposbuscadata"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('gruposbuscadata') ? ' text-red-400' : '' }}">{{ __('grupos busca data') }}</label>
                                <input id="gruposbuscadata"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('gruposbuscadata') ? ' border-red-400' : '' }}"
                                       type="text" name="gruposbuscadata" value="{{ old('gruposbuscadata') }}"/>
                            </div>


                            <div class="py-1"><label for="orientacion"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('orientacion') ? ' text-red-400' : '' }}">{{ __('orientación') }}</label>
                                <input id="orientacion"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('orientacion') ? ' border-red-400' : '' }}"
                                       type="text" name="orientacion" value="{{ old('orientacion') }}"/>
                            </div>
                            <div class="py-1"><label for="outrasexclusions"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('outrasexclusions') ? ' text-red-400' : '' }}">{{ __('outras exclusións') }}</label>
                                <input id="outrasexclusions"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('outrasexclusions') ? ' border-red-400' : '' }}"
                                       type="text" name="outrasexclusions" value="{{ old('outrasexclusions') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="outrasexclusionsnota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('outrasexclusionsnota') ? ' text-red-400' : ''}}">{{ __('outras exclusións nota') }}</label>
                                <textarea id="outrasexclusionsnota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('outrasexclusionsnota') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="residenciadificilaccesibilidade"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('residenciadificilaccesibilidade') ? ' text-red-400' : '' }}">{{ __('Residencia difícil acc.') }}</label>
                                <input id="residenciadificilaccesibilidade"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('residenciadificilaccesibilidade') ? ' border-red-400' : '' }}"
                                       type="text" name="residenciadificilaccesibilidade"
                                       value="{{ old('residenciadificilaccesibilidade') }}"/>
                            </div>

                            <div class="py-1 col-span-2">
                                <label for="residenciadificilaccesibilidadenota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('residenciadificilaccesibilidadenota') ? ' text-red-400' : ''}}">{{ __('residencia difícil acces. nota') }}</label>
                                <textarea id="residenciadificilaccesibilidadenota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('residenciadificilaccesibilidadenota') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="responsabilidadesfamiliares"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('responsabilidadesfamiliares') ? ' text-red-400' : '' }}">{{ __('respons. familiares') }}</label>
                                <input id="responsabilidadesfamiliares"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('responsabilidadesfamiliares') ? ' border-red-400' : '' }}"
                                       type="text" name="responsabilidadesfamiliares"
                                       value="{{ old('responsabilidadesfamiliares') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="responsabilidadesfamiliaresnota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('responsabilidadesfamiliaresnota') ? ' text-red-400' : ''}}">{{ __('respons. familiares nota') }}</label>
                                <textarea id="responsabilidadesfamiliaresnota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('responsabilidadesfamiliaresnota') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="vehiculopropio"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('vehiculopropio') ? ' text-red-400' : '' }}">{{ __('vehículo propio') }}</label>
                                <input id="vehiculopropio"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('vehiculopropio') ? ' border-red-400' : '' }}"
                                       type="text" name="vehiculopropio" value="{{ old('vehiculopropio') }}"/>
                            </div>

                            <div class="py-1"><label for="vo"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('vo') ? ' text-red-400' : '' }}">{{ __('v.o.') }}</label>
                                <input id="vo"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('vo') ? ' border-red-400' : '' }}"
                                       type="text" name="vo" value="{{ old('vo') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="vonota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('vonota') ? ' text-red-400' : ''}}">{{ __('v.o. nota') }}</label>
                                <textarea id="vonota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('vonota') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="addiccions"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('addiccions') ? ' text-red-400' : '' }}">{{ __('Addiccións') }}</label>
                                <input id="addiccions"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('addiccions') ? ' border-red-400' : '' }}"
                                       type="text" name="addiccions" value="{{ old('addiccions') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="addiccionsnota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('addiccionsnota') ? ' text-red-400' : ''}}">{{ __('addiccións nota') }}</label>
                                <textarea id="addiccionsnota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('addiccionsnota') }}"></textarea>
                            </div>


                            <div class="py-1"><label for="desempregadolongaduracion"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('desempregadolongaduracion') ? ' text-red-400' : '' }}">{{ __('desemprego l.d.') }}</label>
                                <input id="desempregadolongaduracion"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('desempregadolongaduracion') ? ' border-red-400' : '' }}"
                                       type="text" name="desempregadolongaduracion"
                                       value="{{ old('desempregadolongaduracion') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="desempregadolongaduracionnota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('desempregadolongaduracionnota') ? ' text-red-400' : ''}}">{{ __('desemprego l.d. nota') }}</label>
                                <textarea id="desempregadolongaduracionnota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('desempregadolongaduracionnota') }}"></textarea>
                            </div>


                            <div class="py-1"><label for="discapacidade"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('discapacidade') ? ' text-red-400' : '' }}">{{ __('discapacidade') }}</label>
                                <input id="discapacidade"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('discapacidade') ? ' border-red-400' : '' }}"
                                       type="text" name="discapacidade" value="{{ old('discapacidade') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="discapacidadenota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('discapacidadenota') ? ' text-red-400' : ''}}">{{ __('discapacidade nota') }}</label>
                                <textarea id="discapacidadenota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('discapacidadenota') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="exreclusa"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('exreclusa') ? ' text-red-400' : '' }}">{{ __('exreclusa') }}</label>
                                <input id="exreclusa"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('exreclusa') ? ' border-red-400' : '' }}"
                                       type="text" name="exreclusa" value="{{ old('exreclusa') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="exreclusanota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('exreclusanota') ? ' text-red-400' : ''}}">{{ __('exreclusa nota') }}</label>
                                <textarea id="exreclusanota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('exreclusanota') }}"></textarea>
                            </div>


                            <div class="py-1"><label for="databaja"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('databaja') ? ' text-red-400' : '' }}">{{ __('data baixa') }}</label>
                                <input id="databaja"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('databaja') ? ' border-red-400' : '' }}"
                                       type="text" name="databaja" value="{{ old('databaja') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="notabaja"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('notabaja') ? ' text-red-400' : ''}}">{{ __('nota baixa') }}</label>
                                <textarea id="notabaja" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('notabaja') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="vvx"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('vvx') ? ' text-red-400' : '' }}">{{ __('vvx') }}</label>
                                <input id="vvx"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('vvx') ? ' border-red-400' : '' }}"
                                       type="text" name="vvx" value="{{ old('vvx') }}"/>
                            </div>
                            <div class="py-1 col-span-2">
                                <label for="vvxnota"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('vvxnota') ? ' text-red-400' : ''}}">{{ __('vvx nota') }}</label>
                                <textarea id="vvxnota" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('vvxnota') }}"></textarea>
                            </div>

                            <div class="py-1"><label for="accionsfe_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('accionsfe_id') ? ' text-red-400' : '' }}">{{ __('accions fe id') }}</label>
                                <input id="accionsfe_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('accionsfe_id') ? ' border-red-400' : '' }}"
                                       type="text" name="accionsfe_id" value="{{ old('accionsfe_id') }}"/>
                            </div>

                            <div class="py-1"><label for="canleacceso_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('canleacceso_id') ? ' text-red-400' : '' }}">{{ __('canle acceso id') }}</label>
                                <input id="canleacceso_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('canleacceso_id') ? ' border-red-400' : '' }}"
                                       type="text" name="canleacceso_id" value="{{ old('canleacceso_id') }}"/>
                            </div>


                            <div class="py-1"><label for="datosoutros_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('datosoutros_id') ? ' text-red-400' : '' }}">{{ __('datos outros id') }}</label>
                                <input id="datosoutros_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('datosoutros_id') ? ' border-red-400' : '' }}"
                                       type="text" name="datosoutros_id" value="{{ old('datosoutros_id') }}"/>
                            </div>

                            <div class="py-1"><label for="disponibilidadexeografica_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('disponibilidadexeografica_id') ? ' text-red-400' : '' }}">{{ __('dispon. xeografica id') }}</label>
                                <input id="disponibilidadexeografica_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('disponibilidadexeografica_id') ? ' border-red-400' : '' }}"
                                       type="text" name="disponibilidadexeografica_id"
                                       value="{{ old('disponibilidadexeografica_id') }}"/>
                            </div>

                            <div class="py-1"><label for="emigraciontype_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('emigraciontype_id') ? ' text-red-400' : '' }}">{{ __('emigración tipo id') }}</label>
                                <input id="emigraciontype_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('emigraciontype_id') ? ' border-red-400' : '' }}"
                                       type="text" name="emigraciontype_id" value="{{ old('emigraciontype_id') }}"/>
                            </div>

                            <div class="py-1"><label for="interesaautoemprego_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('interesaautoemprego_id') ? ' text-red-400' : '' }}">{{ __('int. autoemprego id') }}</label>
                                <input id="interesaautoemprego_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('interesaautoemprego_id') ? ' border-red-400' : '' }}"
                                       type="text" name="interesaautoemprego_id"
                                       value="{{ old('interesaautoemprego_id') }}"/>
                            </div>


                            <div class="py-1"><label for="nacionalidade_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('nacionalidade_id') ? ' text-red-400' : '' }}">{{ __('nacionalidade id') }}</label>
                                <input id="nacionalidade_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('nacionalidade_id') ? ' border-red-400' : '' }}"
                                       type="text" name="nacionalidade_id" value="{{ old('nacionalidade_id') }}"/>
                            </div>


                            <div class="py-1"><label for="operador_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('operador_id') ? ' text-red-400' : '' }}">{{ __('operador_id') }}</label>
                                <input id="operador_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('operador_id') ? ' border-red-400' : '' }}"
                                       type="text" name="operador_id" value="{{ old('operador_id') }}"/>
                            </div>


                            <div class="py-1"><label for="poboacion_idconcello"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('poboacion_idconcello') ? ' text-red-400' : '' }}">{{ __('poboación id concello') }}</label>
                                <input id="poboacion_idconcello"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('poboacion_idconcello') ? ' border-red-400' : '' }}"
                                       type="text" name="poboacion_idconcello"
                                       value="{{ old('poboacion_idconcello') }}"/>
                            </div>

                            <div class="py-1"><label for="tipobaixa_id"
                                                     class="block font-medium uppercase text-sm text-gray-400{{ $errors->has('tipobaixa_id') ? ' text-red-400' : '' }}">{{ __('tipobaixa_id') }}</label>
                                <input id="tipobaixa_id"
                                       class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('tipobaixa_id') ? ' border-red-400' : '' }}"
                                       type="text" name="tipobaixa_id" value="{{ old('tipobaixa_id') }}"/>
                            </div>

                            <div class="py-1 col-span-6">
                                <label for="observacions"
                                       class="block font-medium uppercase text-sm text-gray-400{{$errors->has('observacions') ? ' text-red-400' : ''}}">{{ __('observacións') }}</label>
                                <textarea id="observacions" rows="4"
                                          class="p-2.5 min-w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="{{ old('observacions') }}"></textarea>
                            </div>
                            {{-- <!-- div class="py-1">
                             <label for="paise" class="form-label">Pais de orixe:</label>
                             <select class="form-select">
                              {-- @foreach ($paises as $paise)
                                     <option value="{{$paise->id}}">{{$paise->name}} - {{$paise->code}}</option>
                                 @endforeach
                             </select>
                             </div-->--}}
                        </div>
                        <!-- fin grid -->


                        <div class="flex justify-end mt-4 items-center gap-x-2 mt-8 mb-10">
                            <button type='submit'
                                    class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Create') }}
                            </button>
                            <a href="{{ route('cidadan.index') }}" type="submit"
                               class="px-4 py-2 text-xs font-semibold text-gray-100 uppercase bg-gray-400 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
