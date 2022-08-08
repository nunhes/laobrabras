<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold uppercase text-xl text-gray-800 leading-tight py-6">
            {{ __('Axenda') }}
        </h2>
</div>
<div class="w-1/6 p-2 justify-end"></div>
<div class="w-1/3 p-2 text-right"></div>
 </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 pt-4"">


                   <!-- add calendar -->

                    {{-- @livewireStyles  --}}
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

                    <livewire:calendar />
                    @livewireScripts
                    @stack('scripts')


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
