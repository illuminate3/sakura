@extends('layouts.base')

@section('content')
<div class="page-header inline">
	<h2>All Users <a href=" {{URL::route('users.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</a></h2>
</div>

@if ($users->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>EmployeeId</th>
				<th>Username</th>
				<th>Role</th>
				<th>Position</th>
				<th>JobDesc</th>
				<th><span class="glyphicon glyphicon-cog"></span></th>
				<th><span class="glyphicon glyphicon-remove-circle"></span></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{{ $user->employeeId }}}</td>
					<td>{{{ $user->username }}}<PP/td>
					<td>{{{ $user->role }}}</td>
					<td>{{{ $user->position }}}</td>
					<td>{{{ $user->jobDesc }}}</td>
                    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no users
@endif

@stop
