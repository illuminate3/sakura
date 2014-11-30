@extends('layouts.base')

@section('content')
@parent
<select id="selectProgram">
    @foreach($actions as $action)
    <option value="{{$action->action_id}}">
        {{ $action->title.' '.$action->action_id.' '.$action->description }}
    </option>
    @endforeach
</select>
@stop

