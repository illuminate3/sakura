@extends('layouts.base')

@section('title')

@parent

@stop


@section('content')
{{ Form::open(array('action' => 'NeedController@saveNeed'))}}
{{ Form::label('title', 'Need Title', array('class' => 'form'))}}

{{ Form::close() }}
@stop

