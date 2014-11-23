@extends('layouts.module')

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" id="link-basic-info" class="panel-label" ><a href="#">Basic Info</a></li>
  <li role="presentation" id="link-meds" class="panel-label"><a href="#">Medications</a></li>
  <li role="presentation" id="link-alergies" class="panel-label"><a href="#">Allergies</a></li>
  <li role="presentation" id="link-preferences" class="panel-label"><a href="#">Preferences</a></li>
  <li role="presentation" id="link-biography" class="panel-label"><a href="#">Biographic</a></li>
  <li role="presentation" id="link-test" class="panel-label"><a href="#">Tests</a></li>
  <li role="presentation" id="link-psych" class="panel-label" onclick=""><a href="#">Psychiatric</a></li>
</ul>
@overwrite
@section('panel')
<div id='info-panel'></div>
@overwrite


@section('scripts')
@parent
<script>
    console.log('happy');
</script>
@stop