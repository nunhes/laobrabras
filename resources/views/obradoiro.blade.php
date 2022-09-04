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
</head>
<body>

<!-- Section 1 -->
<section class="w-full px-8 text-gray-700 bg-sky-500">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
            <a href="/" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">S.O.L<span class="text-yellow-500">.</span></span>
            </a>
            <nav class="flex flex-wrap uppercase items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                <a href="/" class="mr-5 font-medium leading-6 text-gray-100 hover:underline hover:text-gray-900">Início</a>
                <a href="/programa" class="mr-5 font-medium leading-6 text-gray-100 hover:underline hover:text-gray-900">Programa de emprego</a>
                <a href="/manual" class="mr-5 font-medium leading-6 text-gray-100 hover:underline hover:text-gray-900">Manual</a>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
           <span class="flex flex-row items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#cccccc"
                 stroke-width="2" class="pr-1 -mt-px w-6 h-6 text-gray-400">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
            </svg>
            <a href="{{ route('login') }}" class=" font-medium leading-6 text-gray-300 uppercase hover:underline hover:text-gray-900">Incia sesión</a>
          </span>
        </div>
    </div>
</section>


<!-- Section 1 -->
<section class="w-full px-8 text-gray-700 bg-white">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex px-10 items-center md:flex-row">
            <a href="/" class="pt-3 no-underline uppercase text-cyan-600">
                <!-- compoñente tooltip -->
            @include('admin.includes.tooltip')
            <!-- end tooltip -->
            </a>
        </div>
        <h2 class="m-0 text-3xl px-10 py-4 font-semibold leading-tight border-0 border-gray-300 lg:text-4xl md:text-3xl">
            FORMAWEB IV
        </h2>
        <div class="w-full mx-4 p-6 text-gray-200 bg-sky-500 text-2xl text-center">Desenvolvemento de aplicacións con
            tecnoloxías web<br>e Sistemas de xestión de información
        </div>
    </div>
</section>

<section class=" max-w-7xl py-8 px-8 text-gray-700 bg-white mx-auto">
    <div class="grid grid-cols-2 gap-4">
        <div class="">
            <img src="./img/toma1.png" class="p-2 mx-auto" alt="Aplicación para o Servizo de Orientación Laboral" title="Aplicación para o Servizo de Orientación Laboral.">
        </div>

        <div class="pt-10 px-8">
            <p class="pt-6 px-4 text-xl pb-0 m-0 text-gray-700 border-0 border-gray-300">
                O programa de emprego ten dous obxectivos específicos:
            <p>
            <ul class="p-0 m-0 border-0 border-gray-300 px-4">
                <li class="text-xl relative py-1 pl-0">
                    - que o alumnado acade as competencias
                    profesionais na creación e publicación de páxinas web, e
                </li>
                <li class=" text-xl relative py-1 pl-0">
                    - que o alumnado alumnado-traballador reciba
                    orientación, asesoramento e información profesional na busca de emprego e/ou autoemprego,
                </li>
            </ul>
            <p class="mb-10 px-4 py-3 text-xl">
                Todo coa finalidade de aumentar as oportunidades de emprego e favorecer a súa inserción laboral.</p>
        </div>
    </div>
</section>

<section class=" max-w-7xl py-8 px-8 text-gray-700 bg-white mx-auto">
    <div class="grid grid-cols-2 gap-4 items-center">
        <div>
            <p class="pt-4 px-8 pb-0 m-0 text-xl text-gray-700 border-0 border-gray-300">
                FORMAWEB IV, contou cun total de 15 alumnos|as traballadores|as, incluídos no ficheiro do Sistema
                Nacional de Garantía Xuvenil no ámbito da Comunidade Autónoma de Galicia, reciben formación profesional
                para o emprego dirixidos á obtención dos certificados de profesionalidade “IFCD02010 DESENVOLVEMENTO DE
                APLICACIÓNS CON TECNOLOXÍAS WEB” + “IFCD02011 SISTEMAS DE XESTIÓN DE INFORMACIÓN”.
            </p>
        </div>

        <div>
            <img src="./img/image18052022.jpeg" alt="Foto do taller" title="Xornada de traballo na aula do obradoiro.">
        </div>
    </div>
</section>


<section class=" max-w-7xl py-8 px-8 text-gray-700 bg-white mx-auto">
    <div class="grid grid-cols-2 gap-4 items-center">
        <div>
            <img src="./img/image20072022.jpeg" class="mr-8" alt="Foto do taller" title="Xornada de traballo na aula do obradoiro.">
        </div>

        <div>
            <p class="pt-4 px-8 pb-0 m-0 text-xl text-gray-700 border-0 border-gray-300">
                O Programa de Emprego cofinanciado pola Unión Europea a través do Fondo Social Europeo, mediante a
                iniciativa de Emprego Xuvenil, programa Operativo de Emprego Xuvenil 2014-2020. O alumnado-traballador
                ten un contrato de formación-aprendizaxe, desenvolvendo un servizo de interese xeral e social, neste
                caso o deseño dunha aplicación de xestión de relación coas persoas usuarias do Servizo de Orientación
                Laboral do Concello de Vigo.
            </p>
        </div>
    </div>
</section>


<section class=" max-w-7xl py-8 px-8 text-gray-700 bg-white mx-auto">
    <div class="grid grid-cols-2 gap-4 items-center">
        <div class="col-span-2">
            <img src="./img/placa-obradoiro-formawebiv.png" class="w-full" alt="Programa de emprego">
        </div>
    </div>
</section>


<section class=" max-w-7xl py-8 px-8 text-gray-700 bg-white mx-auto">
    <div class="grid grid-cols-6 gap-4 items-center">
        <div class="mr-3">
            <img src="./img/galicia_.png" class="object-scale-down w-64 pr-4" alt="Galicia" title="Galicia">
        </div>
        <div class="mr-3">
            <img src="./img/xacobeo21-22-color.png" class="object-scale-down w-64 pr-4" alt="Xacobeo 21-22" title="Xacobeo 21-22">
        </div>
        <div class="mr-3">
            <img src="./img/concellovigo.png" class="object-scale-down w-64 pr-4" alt="Concello de Vigo" title="Concello de Vigo">
        </div>
        <div class="mr-3">
           <img src="./img/obradoiros-20-21.png" height="100" class="object-scale-down w-64" alt="Obradoiros de emprego" title="Obradoiros de emprego">
        </div>
        <div class="mr-3">
           <img src="./img/logo-ue.png" class="object-scale-down w-64 pr-4" alt="Unión Europea" title="Unión Europea">
        </div>
        <div class="mr-3">
           <img src="./img/xuntadegalicia.png" class="object-scale-down w-64 pr-4" alt="Xunta de Galicia" title="Xunta de Galicia">
        </div>
    </div>
</section>

<footer class="bg-gray-100 text-center lg:text-left">
    <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022
        <a class="text-gray-800" href="http://formaweb4.vigo.org/">FORMAWEB IV</a>
    </div>
</footer>

<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>
