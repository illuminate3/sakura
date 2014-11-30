@extends('layouts.base')

@section('content')

<h1>Create Staff</h1>

{{ Form::open(array('route' => 'staff.store')) }}
<ul>
    <li>
        {{ Form::label('staff_id', 'Employee Id#:') }}
        {{ Form::input('number', 'staff_id') }}
    </li>
    <li>
        {{ Form::label('personalEmail', 'Email:') }}
        {{ Form::email('personalEmail') }}
    </li>
    <li>
        {{ Form::label('interviewId', 'interviewId:') }}
        {{ Form::text('interviewId') }}
    </li>
    <li>
        {{ Form::label('paperworkId', 'Interview Paperwork:') }}
        {{ Form::text('paperworkId') }}
    </li>
    <li>
        {{ Form::label('completeDate', 'Paperwork Complete Date:') }}
        {{ Form::text('completeDate') }}
    </li>
    <li>
        {{ Form::label('homeAddress1', 'Address 1:') }}
        {{ Form::text('homeAddress1') }}
    </li>
    <li>
        {{ Form::label('homeAddress2', 'Address 2:') }}
        {{ Form::text('homeAddress2') }}
    </li>
    <li>
        {{ Form::label('zipCodeId', 'Zip Code Id:') }}
        {{ Form::text('zipCodeId') }}
    </li>
    <li>
        {{ Form::label('mailAddress1', 'Mailing Address 1:') }}
        {{ Form::text('mailAddress1') }}
    </li>
    <li>
        {{ Form::label('mailAddress2', 'Mailing Address 2:') }}
        {{ Form::text('mailAddress2') }}
    </li>
    <li>
        {{ Form::label('firstName', 'First Name:') }}
        {{ Form::text('firstName') }}
    </li>
    <li>
        {{ Form::label('middleName', 'Middle Name/Initial:') }}
        {{ Form::text('middleName') }}
    </li>
    <li>
        {{ Form::label('lastName', 'Last Name:') }}
        {{ Form::text('lastName') }}
    </li>
    <li>
        {{ Form::label('primaryPhone', 'Primary Phone:') }}
        {{ Form::text('primaryPhone') }}
    </li>
    <li>
        {{ Form::label('cellPhone', 'cellPhone:') }}
        {{ Form::text('cellPhone') }}
    </li>
    <li>
        {{ Form::label('cellProvider', 'cellProvider:') }}
        {{ Form::text('cellProvider') }}
    </li>
    <li>
        {{ Form::label('workEmail', 'Work Email:') }}
        {{ Form::email('workEmail') }}
    </li>
    <li>
        {{ Form::label('vehicleMake', 'Vehicle Make:') }}
        {{ Form::text('vehicleMake') }}
    </li>
    <li>
        {{ Form::label('vehicleModel', 'Vehicle Model:') }}
        {{ Form::text('vehicleModel') }}
    </li>
    <li>
        {{ Form::label('vehicleYear', 'Vehicle Year:') }}
        {{ Form::text('vehicleYear') }}
    </li>
    <li>
        {{ Form::label('insiranceVerified', 'Verified Insurance:') }}
        {{ Form::text('insuranceVerified') }}
    </li>

    <!--li>
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
    </li-->

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
