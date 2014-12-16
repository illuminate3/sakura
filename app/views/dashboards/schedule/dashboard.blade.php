@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
<li role='presentation' class='dashboard-li active' id="home-li"><a href='#' id='home'>Home</a></li>
    <li role='presentation' class='dashboard-li' id="roster-li"><a href='#' id='staff-availability'>Staff Availability</a></li>
    <li role='presentation' class='dashboard-li' id="information-li"><a href='#' id='client-availability'>Client Availability</a></li>
    <li role='presentation' class='dashboard-li' id="providers-li"><a href='#' id='staff-schedule'>Staff Schedule</a></li>
    <li role='presentation' class='dashboard-li' id="activity-li"><a href='#' id='client-schedule'>Client Schedule</a></li>
    <li role='presentation' class='dashboard-li' id="reports-li"><a href='#' id='timeoff-requests'>Time Off Requests<span class="badge">42</span></a></li>
    
</ul>
<span id="busy-icon"></span>

<div class='container-fluid' id='pane'>


</div>

@stop

@section('scripts')

@parent
<script>
    $(function() {
        alert('loaded!');
    });



    @section('panel-scripts')

            @include('dashboards.schedule.js.openFullCalendarjs')

            @stop

</script>

@stop


