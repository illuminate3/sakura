@extends('layouts.base')
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
@section('scripts')
@parent
<script>
    $("document").ready(function ($) {

        $('#frm-add-program').on('submit', function (e) {

            e.preventDefault();

            var token = $('input[name=_token]').val();
            var filename = $('#filename').val();
            var action = "{{ URL::action('DataimportController@upload')}}";
            //var formData = 'title=' + title + '&description=' + description;
            // we should do saving animation herre id='busy-icon'
            document.getElementById('busy-icon').innerHTML="<img src='../../images/load-wings-small.gif'/>";
            if (title === "")
            {
                document.getElementById('filename').focus();
                document.getElementById('busy-icon').innerHTML="";
                return false;
            } 
            $.ajax({
                type: "post",
                url: action,
                data: formData,
                success: function (data) {
                    console.log(data);
                    $('#frm-add-program').trigger("reset");
                    document.getElementById('busy-icon').innerHTML="Save Complete. Enter new Program.";
                }
            }, 'json');
            return false;
        });
    });
</script>

@stop
