<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="w-1/2 p-2">
                <h2 class="font-semibold text-xl pl-2 pt-4 leading-tight uppercase">
                    {{ __('Axenda') }}
                </h2>
            </div>
        </div>
    </x-slot>
    <div class="py-2 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
                <!-- add calendar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.2/fullcalendar.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"/>

<div class="container py-4">

            <div id='calendar'></div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.2/fullcalendar.min.js"></script>
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script -->
                <script src="{{ asset('vendor/fullcalendar/main.min.js') }}"></script>
                <script src="{{ asset('vendor/fullcalendar/locales/gl.js') }}"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
                <link href="{{ asset('vendor/fullcalendar/main.min.css') }}" rel='stylesheet'/>

                <script>
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
            events: "{{ route('events.index') }}",
            displayEventTime: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            locale: 'gl',
            editable: true,
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var event_name = prompt('Event Name:');
                if (event_name) {
                    var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");
                    $.ajax({
                        url: "{{ route('events.store') }}",
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
                    url: "{{ route('events.edit') }}",
                    data: {
                        title: event.event_name,
                        start: start,
                        end: end,
                        id: event.id,
                    },
                    type: "get",
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
                        type: "get",
                        url: "{{ route('events.destroy') }}",
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
</x-app-layout>

