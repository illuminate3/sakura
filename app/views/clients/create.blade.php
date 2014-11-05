@extends('layouts.base')

@section('content')

<h1>Create New Client</h1>

{{ Form::open(['action' => 'ClientsController@store'])}}
{{ Form::label('First Name','firstname')}}
{{ Form::text('firstname')}}

{{ Form::label('Middle Name','middlename')}}
{{ Form::text('middlename')}}

{{ Form::label('Last Name','lastname')}}
{{ Form::text('lastname')}}


{{ Form::label('Street Address', 'address1')}}
{{ Form::text('address1')}}
{{ Form::label('Apt/Unit', 'address2')}}
{{ Form::text('address2')}}

{{ Form::label('City', 'city')}}
{{ Form::text('city')}}

{{ Form::label('State', 'state')}}
{{ Form::text('state')}}

{{ Form::label('Zip Code', 'zipcode')}}
{{ Form::text('zipcode')}}



{{ Form::close() }}

@stop


