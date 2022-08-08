<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight uppercase">
                    {{ __('Cidadans') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                    @can('cidadan create')
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('cidadan.create') }}"
                               class="text-gray-500 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
                            {{--<abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; + Persoa">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            {{- __('Add Cidadan') -}}</abbr>--}}
                            <!-- compoñente tooltip -->
                                <div class="relative flex inline-flex flex-col items-center group">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    {{-- __('Create') --}}
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

                <form method="GET" action="{{ route('cidadan.index') }}">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{{ request()->input('search') }}"
                                   class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="{{ __('Search') }}">
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
                <!-- end search form -->
            </div>
        </div>

    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-3 px-6 flex items-center">
                    <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pl-6 block sm:inline-block flex">{{ __('Create cidadan') }}</h1>
                    <a href="{{route('cidadan.index')}}"
                       class="mt-4 inline-block no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                        <abbr class="tooltip tooltip--right" data-tooltip="&nbsp; Volver">
                            <span class="items-center mt-4"><svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>
                            {{--  __('<< Back to all cidadan') --}}</abbr>
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
                    <form method="POST" action="{{ route('cidadan.store') }}">
                        @csrf


                        <div class="container py-5 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-12 col-lg-9 col-xl-7">
                                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                        <div class="card-body p-4 p-md-5">
                                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                                            <form>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="text" id="firstName"
                                                                   class="form-control form-control-lg"/>
                                                            <label class="form-label" for="firstName">First Name</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="text" id="lastName"
                                                                   class="form-control form-control-lg"/>
                                                            <label class="form-label" for="lastName">Last Name</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                                        <div class="form-outline datepicker w-100">
                                                            <input type="text" class="form-control form-control-lg"
                                                                   id="birthdayDate"/>
                                                            <label for="birthdayDate"
                                                                   class="form-label">Birthday</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                   name="inlineRadioOptions" id="femaleGender"
                                                                   value="option1" checked/>
                                                            <label class="form-check-label"
                                                                   for="femaleGender">Female</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                   name="inlineRadioOptions" id="maleGender"
                                                                   value="option2"/>
                                                            <label class="form-check-label"
                                                                   for="maleGender">Male</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                   name="inlineRadioOptions" id="otherGender"
                                                                   value="option3"/>
                                                            <label class="form-check-label"
                                                                   for="otherGender">Other</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 pb-2">

                                                        <div class="form-outline">
                                                            <input type="email" id="emailAddress"
                                                                   class="form-control form-control-lg"/>
                                                            <label class="form-label" for="emailAddress">Email</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4 pb-2">

                                                        <div class="form-outline">
                                                            <input type="tel" id="phoneNumber"
                                                                   class="form-control form-control-lg"/>
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
                                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit"/>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="py-2">
                            <label for="nome"
                                   class="block font-medium uppercase text-sm text-gray-400{{$errors->has('nome') ? ' text-red-400' : ''}}">{{ __('Nome') }}</label>
                            <input id="nome"
                                   class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('nome') ? ' border-red-400' : ''}}"
                                   type="text"
                                   name="nome"
                                   value="{{ old('nome') }}"
                            />
                        </div>
                        <div class="py-2">
                            <label for="email"
                                   class="block font-medium uppercase text-sm text-gray-400{{$errors->has('email') ? ' text-red-400' : ''}}">{{ __('Email') }}</label>
                            <input id="email"
                                   class="rounded-none shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('email') ? ' border-red-400' : ''}}"
                                   type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                            />
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
