<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center">
    <div class="p-2">
      <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
        {{ __('Axenda') }}
      </h2>
    </div>
    </div>
  </x-slot>
  <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
        <!-- add calendar -->
        {{-- @livewireStyles --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <livewire:calendar />
        {{-- @livewireScripts --}}
        @stack('scripts')
      </div>
    </div>
  </div>
</x-app-layout>
