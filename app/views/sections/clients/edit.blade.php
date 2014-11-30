@extends('layouts.base')

@section('content')

<h1>Edit Client</h1>
{{ Form::model($client, array('method' => 'PATCH', 'route' => array('clients.update', $client->id))) }}
<ul>
    <li>
        {{ Form::label('mtk', 'MTK Id #:') }}
        {{ Form::input('number', 'mtk') }}
    </li>

    <li>
        {{ Form::label('first', 'First:') }}
        {{ Form::text('first') }}
    </li>

    <li>
        {{ Form::label('middle', 'Middle:') }}
        {{ Form::text('middle') }}
    </li>

    <li>
        {{ Form::label('last', 'Last:') }}
        {{ Form::text('last') }}
    </li>

    <li>
        {{ Form::label('address_1', 'Address 1:') }}
        {{ Form::text('address_1') }}
    </li>

    <li>
        {{ Form::label('address_2', 'Address 2:') }}
        {{ Form::text('address_2') }}
    </li>

    <li>
        {{ Form::label('city', 'City:') }}
        {{ Form::text('city') }}
    </li>


    <li>
        {{ Form::label('state', 'State:') }}
        {{ Form::text('state') }}
    </li>
    <li>
        {{ Form::label('zipcode', 'Zipcode:') }}
        {{ Form::text('zipcode') }}
    </li>
    <li>
        {{ Form::label('state', 'State:') }}
        {{ Form::text('state') }}
    </li>

    <li>
        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
        {{-- link_to_route('clients.show', 'Cancel', $client->id, array('class' => 'btn')) --}}
    </li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop