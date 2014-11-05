@extends('layouts.base')

@section('content')

{{Form::select('cities',$cities)}}
{{Form::select('zipcodes',$zipcodes)}}


@stop

