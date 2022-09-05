<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formaweb iv - Programa de emprego</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--<link href="{{ asset('vendor/flowbite/flowbite.css') }}" rel="stylesheet"> --}}
</head>
<body>

<!-- Section 1 -->
<section class="w-full px-8 text-gray-700 bg-sky-500">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
            <a href="/"
               class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">S.O.L<span
                            class="text-yellow-500">.</span></span>
            </a>
            <nav class="flex flex-wrap uppercase items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                <a href="/"
                   class="mr-5 font-medium leading-6 text-gray-100 hover:underline hover:text-gray-900">Início</a>
                <a href="/programa"
                   class="mr-5 font-medium leading-6 text-gray-100 hover:underline hover:text-gray-900">Programa de
                    emprego</a>
                <a href="/manual" class="mr-5 font-medium leading-6 text-gray-100 hover:underline hover:text-gray-900">Manual</a>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
           <span class="flex flex-row items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#cccccc"
                 stroke-width="2" class="pr-1 -mt-px w-6 h-6 text-gray-400">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/>
            </svg>
            <a href="{{ route('login') }}"
               class=" font-medium leading-6 text-gray-300 uppercase hover:underline hover:text-gray-900">Incia sesión</a>
          </span>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="py-8 bg-white">
    <div class="px-8 mx-auto max-w-7xl lg:px-16">
        <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">Aplicación
            S.O.L.</h2>
        <h4 class="mb-4 text-xl font-medium">Guía visual</h4>
    </div>
</section>


<section>
    <div class="w-full bg-white pb-7" id="manual">
        <div class="px-8 mx-auto max-w-7xl lg:px-16 text-base">
            <!-- menu tab -->
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-base font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2" id="aplicacion-tab"
                                data-tabs-target="#aplicacion" type="button" role="tab" aria-controls="aplicacion"
                                aria-selected="false">Aplicación
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="oficina-tab" data-tabs-target="#oficina" type="button" role="tab"
                                aria-controls="oficina" aria-selected="false">Oficina
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="axenda-tab" data-tabs-target="#axenda" type="button" role="tab"
                                aria-controls="axenda" aria-selected="false">Axenda
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="actividades-tab" data-tabs-target="#actividades" type="button" role="tab"
                                aria-controls="actividades" aria-selected="false">Actividades
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="cidadans-tab" data-tabs-target="#cidadans" type="button" role="tab"
                                aria-controls="cidadans" aria-selected="false">Cidadans
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="empresas-tab" data-tabs-target="#empresas" type="button" role="tab"
                                aria-controls="empresas" aria-selected="false">Empresas
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="emprego-tab" data-tabs-target="#emprego" type="button" role="tab"
                                aria-controls="emprego" aria-selected="false">Emprego
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="formacion-tab" data-tabs-target="#formacion" type="button" role="tab"
                                aria-controls="formacion" aria-selected="false">Formacion
                        </button>
                    </li>
                </ul>
            </div>
            <!-- solapas -->
            <div id="myTabContent">
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="aplicacion" role="tabpanel"
                     aria-labelledby="aplicacion-tab">

                    <!-- solapa1 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal0"><img
                                        src="{{ asset('./img/manual/01-landing-page.png') }}" class="p-2"
                                        alt="Fai clic aquí" title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Aplicación
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Creación, visualización, edición e administración de:
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Actividades
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Persoas vencelladas ao servizo
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Empresas relacionadas co servizo
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Ofertas de emprego
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Ofertas de formación
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal0">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal0" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal0">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/01-landing-page.png') }}"
                                                 class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->


                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="oficina" role="tabpanel"
                     aria-labelledby="oficina-tab">

                    <!-- solapa 2 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal1"><img
                                        src="{{ asset('./img/manual/02-login.png') }}" class="p-2" alt="Fai clic aquí"
                                        title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Oficina
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Apartado para a xestión dos usuarios autorizados a ver, consultar e/ou editar contidos.
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Permisos
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Roles
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Datos do usuario
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal1">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal1" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal1">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/02-login.png') }}" class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="axenda" role="tabpanel"
                     aria-labelledby="axenda-tab">

                    <!-- solapa 3 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal2"><img
                                        src="{{ asset('./img/manual/04-axenda.png') }}" class="p-2" alt="Fai clic aquí"
                                        title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Axenda
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Anotación rápida de citas, fitos,...
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Preme no día no que vaias a crear o evento
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Insire o titulo da cita
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Unha vez creada a cita actuliza a base de
                                    datos
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> As citas podense mover de día facendo clic e
                                    arrastrando
                                </li>
                            </ul>


                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal2">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal2" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal2">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/04-axenda.png') }}" class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->


                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="actividades" role="tabpanel"
                     aria-labelledby="actividades-tab">

                    <!-- solapa 4 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal3"><img
                                        src="{{ asset('./img/manual/05-actividades-programadas.png') }}" class="p-2"
                                        alt="Fai clic aquí" title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Actividades
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Creación, visualización, edición e administración de
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Actividades
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Listado organizable por os distintos atributos
                                    - premer no titulo da columna coma criterio de ordenacion.
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Buscar por distintos criterios
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Creación, edición e administarcion de datos
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Vista en detalle dos datos dunha actividade
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal3">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal3" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal3">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/05-actividades-programadas.png') }}"
                                                 class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="cidadans" role="tabpanel"
                     aria-labelledby="cidadans-tab">

                    <!-- solapa 5 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal4"><img
                                        src="{{ asset('./img/manual/09-persoas.png') }}" class="p-2" alt="Fai clic aquí"
                                        title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Persoas
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Creación, visualización, edición e administración de
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Perfiles das persoas vencelladas ao servizo
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Listado e busca de persoas
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Edición dos datos dunha persoa
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Vista en detalle dos datos dunha persoa
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Descarga de listados en Exel e PDF
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal4">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal4" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal4">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/09-persoas.png') }}" class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="empresas" role="tabpanel"
                     aria-labelledby="empresas-tab">

                    <!-- solapa 6 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal5"><img
                                        src="{{ asset('./img/manual/13-empresas.png') }}" class="p-2"
                                        alt="Fai clic aquí" title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Empresas
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Creación, visualización, edición e administración de
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Empresas
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Listado de empresas vencelladas ao servizo
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Busca por distintos critérios
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Edición dos datos da empresa
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Vista en detalle dos datos da empresa
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Descarga de listados en Exel e PDF
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal5">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal5" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal5">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/13-empresas.png') }}" class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="emprego" role="tabpanel"
                     aria-labelledby="emprego-tab">

                    <!-- solapa 7 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal6"><img
                                        src="{{ asset('./img/manual/17-ofertas-emprego.png') }}" class="p-2"
                                        alt="Fai clic aquí" title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Emprego
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Creación, visualización, edición e administración de
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Ofertas de emprego
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Listados e administración
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Buscas por distintos critérios
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Edición dos datos da oferta
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Vista en detalle dos datos da oferta
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Descarga de listados en Exel e PDF
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal6">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal6" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal6">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/17-ofertas-emprego.png') }}"
                                                 class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="formacion" role="tabpanel"
                     aria-labelledby="formacion-tab">

                    <!-- solapa 8 -->
                    <div class="box-border flex flex-col items-center content-center px-2 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl">

                        <!-- Image -->
                        <div class="box-border relative w-full max-w-md px-0 mt-0 mb-0 -ml-0 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                            <button type="button" data-modal-toggle="modal7"><img
                                        src="{{ asset('./img/manual/21-ofertas-de-formacion.png') }}" class="p-2"
                                        alt="Fai clic aquí" title="Fai clic aquí"/></button>
                        </div>

                        <!-- Content -->
                        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                            <h2 class="m-0 text-xl font-bold">
                                Formación
                            </h2>
                            <p class="pt-4 pb-4 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                Creación, visualización, edición e administración de
                            </p>
                            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Ofertas de formación
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Listados e administración
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Buscas por distintos critérios
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Edición dos datos da oferta
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Vista en detalle dos datos da oferta
                                </li>
                                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                                class="text-sm font-bold">✓</span></span> Descarga de listados en Exel e PDF
                                </li>
                            </ul>

                            <!-- Modal toggle -->
                            <button class="px-4 py-2 mt-4 text-xs font-semibold text-gray-100 uppercase bg-gray-800 border border-transparent rounded-md tracking-widest shadow-md hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" data-modal-toggle="modal7">
                                Ampliar imaxe
                            </button>

                            <!-- Main modal -->
                            <div id="modal7" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-full h-full py-6 md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white shadow bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-start p-4 border-b dark:border-gray-600">
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal7">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Pechar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-0 space-y-2.5">
                                            <img src="{{ asset('./img/manual/21-ofertas-de-formacion.png') }}"
                                                 class="min-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                        </div>
                        <!-- End  Content -->
                    </div>
                    <!-- end solapa -->

                </div>
            </div>
        </div>
    </div>
</section>


<section class="w-full px-8 text-gray-700 text-center">
    <div class="container flex flex-col flex-wrap items-center justify-center py-8 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
        <a class="flex text-gray-800 text-center items-center uppercase" href="{{ asset('./docs/manual1.pdf') }}">Guía visual <!-- compoñente tooltip -->
            <div class="relative flex inline-flex flex-col items-center group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                     viewBox="0 0 24 24"
                     stroke="#dc2626" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                {{-- __('Exportar PDF') --}}
                <div
                        class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                    <span
                            class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                      {{ __('PDF') }}</span>
                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                </div>
            </div>
            <!-- end tooltip --></a>
    </div>
    </div>
</section>

<!-- Section 3 -->
<section class="py-24 bg-white">
    <div class="px-8 mx-auto max-w-7xl lg:px-16">
        <h4 class="mb-4 text-xl font-medium">Entorna de desenvolvemento</h4>
        <div class="grid grid-cols-1 gap-0 text-gray-600 md:grid-cols-2 md:gap-16">
            <div>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Que é Laravel?</h5>
                <p>Laravel é un marco web de código aberto e gratuíto baseado en PHP. Admite o patrón arquitectónico MVC
                    (Model-View-Controller), e ofrece unha sintaxe expresiva e accesible, útil para crear aplicacións
                    web.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Pincipais características</h5>
                <ul>
                    <li class="list-disc list-inside">Sistema de mapeado de obxecto relacional - Eloquent ORM.</li>
                    <li class="list-disc list-inside">Creador de consultas - Query builder.</li>
                    <li class="list-disc list-inside">Enrutamento e controladores Restful.</li>
                    <li class="list-disc list-inside">Migracións e semente de bases de datos.</li>
                </ul>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Mapeado de obxecto relacional</h5>
                <p>Proporciona os métodos internos da relación
                    cos obxectos da base de datos, e de aplicar calquera restrición ás mesmas. Representa as táboas de
                    bases de datos como clases, coas súas
                    instancias de obxectos ligadas a filas de táboa únicas, mentres segue o patrón de rexistro
                    activo.
                </p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Query Builder</h5>
                <p>Ofrece un acceso máis directo á base de datos. Non require que as consultas SQL se escriban
                    directamente, ofrecendo un conxunto de clases e métodos que son capaces de construír
                    consultas mediante programación.</p>
            </div>
            <div>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Enrutamento</h5>
                <p>Todas as rutas se definen en arquivos de ruta. As proporcionan funcións como o <strong>estado da
                        sesión</strong> e a protección <strong>CSRF</strong>.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Paquetes</h5>
                <p>Os paquetes son a forma principal de engadir máis funcionalidades a Laravel. Os paquetes poden ser
                    calquera cousa, desde unha boa forma de traballar con datas como <em>Carbon</em> ou un marco
                    completo de
                    probas BBDD. E tamén ofrece soporte para crear paquetes personalizados.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Composer</h5>
                <p>Composer é un xestor de dependencias en PHP. Xestiona as dependencias que son necesarias para un
                    proxecto. Isto significa que Composer incorporará todas as bibliotecas e dependencias necesarias e
                    xestionará todo nun único lugar.</p>
                <h5 class="mt-10 mb-3 font-semibold text-gray-900">Migracións de bases de datos</h5>
                <p>As migracións pódense definir coma un control de versións para a base de datos. Permiten modificar e
                    compartir o esquema de base de datos da aplicación. Adoitan
                    combinarse co **creador de esquemas** para construír facilmente o esquema de base de datos da
                    aplicación.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4
<section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" id="aboutme">
    <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
        -->
<!-- Image
<div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
    <img src="https://cdn.devdojo.com/images/december2020/productivity.png"
         class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
</div>
-->
<!-- Content --
<div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
    <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
        Boost Productivity
    </h2>
    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
        Build an atmosphere that creates productivity in your organization and your company culture.
    </p>
    <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
            <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                        class="text-sm font-bold">✓</span></span> Maximize productivity and growth
        </li>
        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
            <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                        class="text-sm font-bold">✓</span></span> Speed past your competition
        </li>
        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
            <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                        class="text-sm font-bold">✓</span></span> Learn the top techniques
        </li>
    </ul>
</div>
-- End  Content --
</div>
<div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">

!-- Content --
<div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
    <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
        Automated Tasks
    </h2>
    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
        Save time and money with our revolutionary services. We are the leaders in the industry.
    </p>
    <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
            <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                        class="text-sm font-bold">✓</span></span> Automated task management workflow
        </li>
        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
            <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                        class="text-sm font-bold">✓</span></span> Detailed analytics for your data
        </li>
        <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
            <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-500 rounded-full"><span
                        class="text-sm font-bold">✓</span></span> Some awesome integrations
        </li>
    </ul>
</div>
!-- End  Content --

!-- Image --
<div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
    <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
</div>
</div>
</section> -->
<section class=" max-w-7xl py-8 px-8 text-gray-700 bg-white mx-auto">
    <div class="grid grid-cols-6 gap-4 items-center">
        <div class="mr-3">
            <img src="./img/galicia_.png" class="object-scale-down w-64 pr-4" alt="Galicia" title="Galicia">
        </div>
        <div class="mr-3">
            <img src="./img/xacobeo21-22-color.png" class="object-scale-down w-64 pr-4" alt="Xacobeo 21-22"
                 title="Xacobeo 21-22">
        </div>
        <div class="mr-3">
            <img src="./img/concellovigo.png" class="object-scale-down w-64 pr-4" alt="Concello de Vigo"
                 title="Concello de Vigo">
        </div>
        <div class="mr-3">
            <img src="./img/obradoiros-20-21.png" height="100" class="object-scale-down w-64"
                 alt="Obradoiros de emprego" title="Obradoiros de emprego">
        </div>
        <div class="mr-3">
            <img src="./img/logo-ue.png" class="object-scale-down w-64 pr-4" alt="Unión Europea" title="Unión Europea">
        </div>
        <div class="mr-3">
            <img src="./img/xuntadegalicia.png" class="object-scale-down w-64 pr-4" alt="Xunta de Galicia"
                 title="Xunta de Galicia">
        </div>
    </div>
</section>

<footer class="bg-gray-100 text-center lg:text-left">
    <div class="text-center text-gray-700 p-4">
        © 2022
        <a class="text-gray-800" href="http://formaweb4.vigo.org/">FORMAWEB IV</a>
    </div>
</footer>
<script src="{{ asset('vendor/flowbite/flowbite.js') }}" defer></script>
</body>
</html>
