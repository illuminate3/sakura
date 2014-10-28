@extends('layouts.base')


@section('content')

@parent

<select id='selectZipcode'>
    @foreach($zipcodes as $zipcode)
    <option value='{{$zipcode->zip_code_id}}'>{{$zipcode->city.', '.$zipcode->state.', '.$zipcode->zipcode}}</option>
    
    @endforeach
    
    
    
</select>



@stop


