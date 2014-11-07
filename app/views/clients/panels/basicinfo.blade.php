@extends('layouts.module')


@section('panel')


<h1>Client Information</h1>

{{ Form::open(['action' => 'ClientsController@store'])}}
{{ Form::label('firstname','First Name')}}
{{ Form::text('firstname')}}

{{ Form::label('middlename','Middle Name')}}
{{ Form::text('middlename')}}

{{ Form::label('lastname','Last Name')}}
{{ Form::text('lastname')}}
<br />

{{ Form::label('address1', 'Street Address')}}
{{ Form::text('address1')}}
{{ Form::label('address2', 'Apt/Unit')}}
{{ Form::text('address2')}}
<br />
{{ Form::label('city', 'City')}}
{{ Form::text('city')}}

{{ Form::label('state', 'State')}}
{{ Form::text('state')}}

{{ Form::label('zipcode', 'Zipcode')}}
{{ Form::text('zipcode')}}



{{ Form::close() }}

@stop
