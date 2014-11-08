@extends('layouts.module')

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#">Basic Info</a></li>
  <li role="presentation"><a href="#">Medications</a></li>
  <li role="presentation"><a href="#">Allergies</a></li>
  <li role="presentation"><a href="#">Preferences</a></li>
  <li role="presentation"><a href="#">Biographic</a></li>
  <li role="presentation"><a href="#">Tests</a></li>
  <li role="presentation"><a href="#">Psychiatric</a></li>
</ul>
@overwrite
@section('panel')
@include('clients.panels.basicinfo')
@overwrite
