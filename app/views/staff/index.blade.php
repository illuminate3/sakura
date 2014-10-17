@extends('layouts.base')

@section('content')
<div class="page-header inline">
  <h2>All Staff <a href=" {{URL::route('staff.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</a></h2>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th>Employee Id #</th>
      <th>Username</th>
      <th>Role</th>
      <th>Position</th>
      <th>JobDesc</th>
      <th>Perms</th>
      <th><span class="glyphicon glyphicon-cog"></span></th>
      <th><span class="glyphicon glyphicon-remove-circle"></span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($staffs as $staff)
      <tr>
        <td>{{{ $staff->staff_id }}}</td>
        <td>{{{ $staff->username }}}</td>
        <td>{{{ $staff->role }}}</td>
        <td>{{{ $staff->position }}}</td>
        <td>{{{ $staff->jobDesc }}}</td>
        <td>{{{ $staff->perms }}}</td>

          <td>{{ link_to_route('staff.edit', 'Edit', [$staff->staff_id], ['class' => 'btn btn-info']) }}</td>
          <td>
            {{ Form::open(['method' => 'DELETE', 'route' => ['staff.destroy', $staff->staff_id]]) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
          </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $staffs->links()  }}
@stop
