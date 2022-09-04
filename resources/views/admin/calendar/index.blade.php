<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl pl-4 text-gray-800 leading-tight">
            {{ __('Axenda') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 pt-0 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-8">
                        @can('calendar create')
                            <div class="d-print-none with-border mb-8">
                                <a href="{{ route('calendar.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{ __('Add Cita') }}</a>
                            </div>
                        @endcan
                        <div class="py-2">
                            @if(session()->has('message'))
                                <div class="mb-8 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                                <!-- search form -->

                                <form method="GET" action="{{ route('calendar.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                            <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                                {{ __('Search') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <!-- end search form -->


                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

    <!-- doctype html>
    <html>
    <head>
        <title>FullCalndar example</title>
        <meta name="csrf-token" content="{ { csrf _ token( ) } }">

    </head>
    <body>
    <div class="container">
        <div class="row m-3">
            <h1>FullCalndar example</h1>
            <hr -->
            <div class="col-12">
                <div id='calendar'></div>
            </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.2/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // pass _token in all ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // initialize calendar in all events
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: "{{ route('calendar.index') }}",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var event_name = prompt('Event Name:');
                    if (event_name) {
                        var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");
                        $.ajax({
                            url: "{{ route('calendar.create') }}",
                            data: {
                                title: event_name,
                                start: start,
                                end: end
                            },
                            type: 'post',
                            success: function (data) {
                                iziToast.success({
                                    position: 'topRight',
                                    message: 'Event created successfully.',
                                });

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "YYYY-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "YYYY-MM-DD HH:mm:ss");

                    $.ajax({
                        url: "{{ route('calendar.edit') }}",
                        data: {
                            title: event.event_name,
                            start: start,
                            end: end,
                            id: event.id,
                        },
                        type: "POST",
                        success: function (response) {
                            iziToast.success({
                                position: 'topRight',
                                message: 'Event updated successfully.',
                            });
                        }
                    });
                },
                eventClick: function (event) {
                    var eventDelete = confirm('Are you sure to remove event?');
                    if (eventDelete) {
                        $.ajax({
                            type: "post",
                            url: "{{ route('calendar.destroy') }}",
                            data: {
                                id: event.id,
                                _method: 'delete',
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                iziToast.success({
                                    position: 'topRight',
                                    message: 'Event removed successfully.',
                                });
                            }
                        });
                    }
                }
            });
        });
    </script>
    <!-- /body>
    </html-->

    </div>
</x-app-layout>
