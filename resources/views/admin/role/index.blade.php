<x-app-layout>
    <x-slot name="header">

<div class="flex">
            <div class="w-1/2 p-2 text-left">
        <h2 class="font-semibold text-xl pt-4 leading-tight">
            {{ __('Roles') }}
        </h2>
</div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">

@can('role create')
                            <div class="d-print-none with-border mt-2 p-0">
                                <a href="{{ route('role.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
                                <abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; Novo rol">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
       {{-- __('Add Role') --}}</abbr></a>
  </div>
                        @endcan
                </div>

            </div>
            <div class="w-1/3 p-2 text-right">
                <!-- search form -->

                <form method="GET" action="{{ route('role.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-sm shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{__('Search') }}">
                                            <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                                {{ __('Search') }}
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
                <div class="p-0 p-t-4 border-b border-gray-200">
                    <div class="flex flex-col mt-2">
                        
                        <div class="py-2">
                            @if(session()->has('message'))
                                <div class="ml-5 mb-6 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">
                                


                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                                        </th>
                                        @canany(['role edit', 'role delete'])
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcanany
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-slate-800">
                                    @foreach($roles as $role)
                                        <tr>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('role.show', $role->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $role->name }}</a>
                                                </div>
                                            </td>
                                            @canany(['role edit', 'role delete'])
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                    <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                                        @can('role edit')
                                                            <a href="{{route('role.edit', $role->id)}}" class="px-4 py-2 text-white mr-4 bg-blue-600">
                                                                {{ __('Edit') }}
                                                            </a>
                                                        @endcan
                                                        @can('role delete')
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-4 py-2 text-white bg-red-600" onclick="deleteConfirm(role)">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        @endcan
                                                    </form>
                                                </td>
                                            @endcanany
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="py-8">
                                {{ $roles->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>