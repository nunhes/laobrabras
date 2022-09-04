<div class="mb-10 pb-10">
    <div class="m-1 clear-both"> {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <div>
            <div id='calendar-container' wire:ignore>
              <div id='calendar'></div>
            </div>
        </div>

        @push('scripts')
        <!-- script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script -->
            <script src="{{ asset('vendor/fullcalendar/main.min.js') }}"></script>
            <script src="{{ asset('vendor/fullcalendar/locales/gl.js') }}"></script>

        <script>
                document.addEventListener('livewire:load', function () {
                    var Calendar = FullCalendar.Calendar;
                    var Draggable = FullCalendar.Draggable;
                    var calendarEl = document.getElementById('calendar');
                    var checkbox = document.getElementById('drop-remove');
                    var data = @this.
                    events;
                    var calendar = new Calendar(calendarEl, {
                        events: JSON.parse(data),
                        dateClick(info) {
                            var title = prompt('Inserir un nome para o evento');
                            var date = new Date(info.dateStr + 'T00:00:00');
                            if (title != null && title != '') {
                                calendar.addEvent({
                                    title: title,
                                    start: date,
                                    allDay: true
                                });
                                var eventAdd = {
                                    title: title,
                                    start: date
                                };
                                @this.
                                addevent(eventAdd);
                                alert('Anotado. Actualiza a base de datos agora...');
                            } else {
                                alert('Se require un título para o evento!   ');
                            }
                        },
                        // timeZone: 'Europe/Madrid', isto desplaza as citas un dia atras
                        locale: 'gl',
                        editable: true,
                        selectable: true,
                        displayEventTime: false,

                        // settings
                /* /* headerToolbar: {
                      left: 'prev,next today',
                      center: 'title',
                     // right: 'dayGridMonth,timeGridWeek,timeGridDay'
                  },*/

                       headerToolbar: {
                            left: 'title',
                            center: '',
                            right: 'today prev,next'
                        },

                        titleFormat: {
                            year: 'numeric',
                            month: 'long',
                        },

                        businessHours: {
                            // days of week. an array of zero-based day of week integers (0=Sunday)
                            daysOfWeek: [1, 2, 3, 4, 5], // Monday - Thursday

                            // startTime: '10:00', // a start time (10am in this example)
                            // endTime: '14:00', // an end time (6pm in this example)
                        },
                        hiddenDays: [0, 6], // agochar Sunday - Saturday

                        navLinks: true, // can click day/week names to navigate views
                        eventLimit: true, // allow "more" link when too many events
                        // end settings
                        droppable: true, // this allows things to be dropped onto the calendar
                        drop: function (info) {
                            // is the "remove after drop" checkbox checked?
                            if (checkbox.checked) {
                                // if so, remove the element from the "Draggable Events" list
                                info.draggedEl.parentNode.removeChild(info.draggedEl);
                            }
                        },
                        eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
                        loading: function (isLoading) {
                            if (!isLoading) {
                                // Reset custom events
                                this.getEvents().forEach(function (e) {
                                    if (e.source === null) {
                                        e.remove();
                                    }
                                });
                            }
                        }
                    });
                    calendar.render();
                    @this.
                    on(`refreshCalendar`, () => {
                        calendar.refetchEvents()
                    });
                });
            </script>
           <!-- link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet'/
            * Ao tratarse dunha aplicación onterna é preferible empregar un recurso local
            * -->
            <link href="{{ asset('vendor/fullcalendar/main.min.css') }}" rel='stylesheet'/>
        @endpush
    </div>
</div>
