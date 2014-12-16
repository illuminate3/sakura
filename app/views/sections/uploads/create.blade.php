@extends('layouts.module')
@section('content')
{{ Form::open(['id'=>'getUpload','method'=>'post'])}}
{{ Form::text('data', null)}}
{{ Form::submit('Select Item')   }}
{{ Form::close()  }}
<div id="searchresults">
    <ul id="results" class="update">
    </ul>
</div>

</br>
<div id="dashcontent">
</div>
{{ Request::url() }}
{{--<script>
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

</script>--}}
@stop