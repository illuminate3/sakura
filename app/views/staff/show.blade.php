@extends('layouts.base')

@section('title')
@parent
:: User Details
@stop

@section('content')

<div class="page-header">
    <h4>All Users</h4>
</div>
<ul>
    <li>EmployeeId</li>
    <li>Role</li>
    <th>Position</th>
    <th>JobDesc</th>
    <th>Perms</th>

    <td>{{{ $user->employeeId }}}</td>
    <td>{{{ $user->role }}}</td>
    <td>{{{ $user->position }}}</td>
    <td>{{{ $user->jobDesc }}}</td>
    <td>{{{ $user->perms }}}</td>
    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
    <td>
        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
</ul>
@stop
