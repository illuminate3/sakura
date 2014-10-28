@extends('layouts.base')

@section('title')
@parent
@stop

@section('content')
{{ $intervention->title }}
<br />
{{ $intervention->description }}

@stop
