@extends('layouts.module')

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" id="link-basic-info" class="panel-label" ><a href="#">Information</a></li>
  <li role="presentation" id="link-contacts" class="panel-label"><a href="#">Contacts</a></li>
  <li role="presentation" id="link-preferences" class="panel-label"><a href="#">Preferences</a></li>
  <li role="presentation" id="link-biography" class="panel-label"><a href="#">Geographic</a></li>
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