@extends('layouts.base')

@section('content')
@parent
<select id="selectNeed">
@foreach($needs as $need)
<option value="{{$need->need_id}}">
{{ $need->title.' '.$need->need_id.' '.$need->description }}
</option>
@endforeach
</select>
@stop


