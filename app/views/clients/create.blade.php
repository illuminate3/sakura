@extends('layouts.base')

@section('content')

<h1>Create User</h1>

{{ Form::open(['route' => 'clients.create'])}}
{{ Form::label('First Name','firstname');}}
{{ Form::text('firstname');}}
{{ Form::close() }}

@stop


