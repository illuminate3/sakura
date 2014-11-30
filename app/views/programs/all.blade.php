@extends('layouts.base')

@section('content')
@parent
<select id="selectProgram">
    @foreach($programs as $program)
    <option value="{{$program->program_id}}">
        {{ $program->title.' '.$program->program_id.' '.$program->description }}
    </option>
    @endforeach
</select>
@stop

