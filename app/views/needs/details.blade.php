@extends('layouts.base')

@section('title')
@parent
@stop

@section('content')
{{ $need->title }}
<br />
{{ $need->description }}

@stop
