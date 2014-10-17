@extends('layouts.base')

@section('content')

<h1>Create User</h1>

{{ Form::open(['route' => 'clients.create'])}}
{{ Form::label('First Name');}}
{{ Form::close() }}

@stop


