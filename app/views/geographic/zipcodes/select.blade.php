@extends('layouts.base')

@section('zipcode')

<select class='form-control'>
{{ @foreach($zipcodes as $zipcode) }}
<option value = {{  }}
{{@endforeach}}
</select>

@stop

