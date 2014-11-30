@extends('layouts.base')

@section('content')

<h1>Create User</h1>

{{ Form::open(array('route' => 'users.store')) }}
<ul>
    <li>
        {{ Form::label('employeeId', 'Employee Id #:') }}
        {{ Form::input('number', 'employeeId') }}
    </li>

    <li>
        {{ Form::label('role', 'Role:') }}
        {{ Form::text('role') }}
    </li>

    <li>
        {{ Form::label('position', 'Position:') }}
        {{ Form::text('position') }}
    </li>

    <li>
        {{ Form::label('jobDesc', 'JobDesc:') }}
        {{ Form::text('jobDesc') }}
    </li>

    <li>
        {{ Form::label('perms', 'Perms:') }}
        {{ Form::text('perms') }}
    </li>

    <li>
        {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
    </li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


