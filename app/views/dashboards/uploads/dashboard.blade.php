@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
    <li role='presentation' class='dashboard-li active' id="home-li"><a href='#' id='home'>Home</a></li>
    <li role='presentation' class='dashboard-li' id="upload-new-li"><a href='#' id='upload-new'>Upload New Item</a></li>
    <li role='presentation' class='dashboard-li' id="upload-history-li"><a href='#' id='upload-history'>Upload History</a></li>
    <li role='presentation' class='dashboard-li' id="information-li"><a href='#' id='upload-information'>Information</a></li>
    <li role='presentation' class='dashboard-li' id="special-datasets-li"><a href='#' id='special-datasets'>Special Datasets</a></li>
    <li role='presentation' class='dashboard-li' id='current-entity-li'><span class="form-control">Upload:<span hidden="hidden" id='current-entity'></span><span id='current-entity-label'></span></span>
        </li>
</ul>
<span id="busy-icon"></span>

<div class='container-fluid' id='pane'>


    
</div>
@stop


@section('scripts')
@include('dashboards.uploads.js.dashboardjs')
@parent

@stop

@section('panel-scripts')

@parent
@include('dashboards.uploads.js.specialdatasetsjs')
@include('dashboards.uploads.js.uploadhistoryjs')
@include('dashboards.uploads.js.uploadnewjs')
@include('dashboards.uploads.js.informationjs')
@include('dashboards.uploads.js.homejs')
@include('dashboards.uploads.js.createjs')

@stop

