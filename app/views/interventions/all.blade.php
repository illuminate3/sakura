@extends('layouts.base')

@section('content')
@parent
<select id="selectNeed">
    @foreach($interventions as $intervention)
    <option value="{{$intervention->intervention_id}}">
        {{ $intervention->title.' '.$intervention->intervention_id.' '.$intervention->description }}
    </option>
    @endforeach
</select>
@stop


