@extends('layouts.base')

@section('title')
@parent

@stop

@section('content')
<div><strong>Title:</strong>
    <h3>  {{$action->title}}</h3>
</div>
<br />
<strong> Action Description </strong><br />
<div>{{$action->description}}</div>
<strong>Needs:</strong>

@stop