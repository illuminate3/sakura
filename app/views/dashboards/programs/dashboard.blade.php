@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
    <li role='presentation' class='dashboard-li active' id="home-li"><a href='#' id='home'>Home</a></li>
    <li role='presentation' class='dashboard-li' id="roster-li"><a href='#' id='roster'>Roster</a></li>
    <li role='presentation' class='dashboard-li' id="information-li"><a href='#' id='info'>Information</a></li>
    <li role='presentation' class='dashboard-li' id="diagnoses-li"><a href='#' id='diagnoses'>Diagnoses</a></li>
    <li role='presentation' class='dashboard-li' id="reports-li"><a href='#' id='reports'>Reports<span class="badge">42</span></a></li>
    <li role='presentation' class='dashboard-li' id='current-entity-li'><span  class="">Program:</span><span hidden='hidden' id='current-entity'></span><span id='current-entity-title'></span></li>

</ul>
<span id="busy-icon"></span>

<div class='container-fluid' id='pane'>


</div>
@stop


@section('scripts')

@parent

@stop

