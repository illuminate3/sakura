@extends('packages\jleach\dataimport\layouts\master')

@section('content')
<script type="text/javascript">
 jQuery( document ).ready( function( $ ) {
 
    $( 'form' ).submit( function(e) {
    e.preventDefault();
       
        $.post('categories', {name:'name anything'}, function(data) {
            $( "#results" ).append(data);
            console.log(data);
        });});
        //.....
        //do anything else you might want to do
        //.....
 
        //prevent the form from actually submitting in browser
    return false;
//$('#dashcontent').load('uploaded');
});
</script>
{{ $route_name }}
            {{ Form::open(
                        array(
                        'url'=>'/dataimportload',
                        'files'=>true,
                        'action' => 'UploadController@upload',
                        'enctype' => 'multipart/form-data',
                        'method' => 'PUT',
                             )
                        ) }}
            {{ Form::label('primaryKey','Primary Key (required)')}}
            {{ Form::text('primaryKey')}}
            </br>
            
                        </br>
            {{ Form::label('fieldDelimiter', 'Field Delimiter (Optional)')}}
            {{ Form::text('fieldDelimiter')}}
            </br>
            {{ Form::label('fieldEscape', 'Field Escape (Optional)')}}
            {{ Form::text('fieldEscape')}}
           
            {{ Form::label('table','Table Name (Required)') }}
            {{ Form::text('table',null, null,array('required'=>'required')) }}
            </br>
            {{ Form::label('data','Load File')}}
            {{ Form::file('data',null, null,array('required'=>'required')) }}
            </br>
            {{ Form::submit('Upload File') }}
            {{Form::close()}}
@stop
