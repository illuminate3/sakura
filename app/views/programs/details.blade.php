@extends('layouts.base')

@section('title')
@parent

@stop

@section('content')
<div><strong>Title:</strong>
    <h3>  {{$program->title}}</h3>
</div>
<br />
<strong> Program Description </strong><br />
<div>{{$program->description}}</div>
<strong>Needs:</strong>
<ul>
@foreach($program->needs as $need)
<li><strong>{{$need->title}}</strong><br /> {{$need->description}}<br /></li>
@endforeach

</ul>
@stop