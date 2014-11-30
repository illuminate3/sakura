@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>

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


