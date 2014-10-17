@extends('layouts.base')

@section('content')

<h1>Edit User</h1>
{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{-- link_to_route('users.show', 'Cancel', $user->id, array('class' => 'btn')) --}}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop