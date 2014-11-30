@extends('layouts.base')

@section('title')
@parent
:: Scheduler
@stop

@section('styles')
@parent
{{ HTML::style('css/fullcalendar.css') }}
@stop

@section('content')
<div class="page-header">
    <h1>FullCircle Supports Schedule</h1>
</div>
<div id="calendar"></div>
@stop

@section('scripts')
@parent
{{ HTML::script('js/jquery-ui.custom.min.js') }}
{{ HTML::script('js/moment.min.js') }}
{{ HTML::script('js/fullcalendar.min.js') }}
<script type="text/javascript">
    $(document).ready(function() {

        // Date vars init
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        // calendar init
        $('#calendar').fullCalendar({
            // options and callbacks go here
            defaultView: 'agendaWeek',
            header: {
                left: 'prevYear,nextYear prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            handleWindowResize: true,
            editable: true,
            firstDay: 0,
            weekends: true,
            weekNumbers: true,
            allDayDefault: false,
            allDaySlot: false,
            slotEventOverlap: false,
            weekNumberCalculation: "ISO",
            slotDuration: '00:15:00',
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ],
            /*            annotations: [
             {
             start: new Date(y, m, d, 13, 0),
             end: new Date(y, m, d, 15, 30),
             title: 'My 1st annotation',
             cls: 'open',
             color: '#777777', // optional
             background: '#eeeeff' // optional
             },
             {
             start: new Date(y, m, d+1, 15, 0),
             end: new Date(y, m, d+1, 16, 45),
             title: 'On vacations',
             cls: 'vacation',
             color: '#777777',
             background: '#eeeef0' // optional
             },
             {
             start: new Date(y, m, d+1, 16, 0),
             end: new Date(y, m, d+1, 18, 30),
             title: 'Overlapping annotation',
             cls: 'open',
             color: '#777777', // optional
             background: '#eeeedd' // optional
             },
             {
             // just minimal fields for annotation
             start: new Date(y, m, d-1, 12, 0),
             end: new Date(y, m, d-1, 14, 0)
             }
             ]
             
             eventRender: function(event, jsEvent, element) {
             //element.find('.fc-day-content').css('background-color', 'pink');
             //$('.fc-day[data-date="' + new Date(y, m, 1) + '"]').addClass("orange");
             //$('.fc-day[data-date="' + date + '"]').css('background-color', '#eeeedd');
             },
             dayClick: function(date, jsEvent, view) {
             console.log('Clicked on: ' + date.format());
             console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
             console.log('Current view: ' + view.name);
             },*/

        })
    });
</script>
@stop
