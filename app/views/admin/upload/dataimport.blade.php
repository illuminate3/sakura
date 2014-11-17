@extends('layouts.base')

@section('content')
<span id='busy-icon'></span>

{{ Form::open(
    array(
                        'url'=>'/upload/upload',
                        'files'=>true,
                        'id' => 'form',
                        'action' => 'DataimportController@upload',
                        'enctype' => 'multipart/form-data',
                        'method' => 'POST',
    )
                        ) }}
{{ Form::label('primaryKey','Primary Key (required)')}}
{{ Form::text('primaryKey')}}
</br>

</br>
{{ Form::label('fieldDelimiter', 'Field Delimiter (Optional)')}}
{{ Form::text('fieldDelimiter')}}
</br>
{{"Enter t for TAB, , for comma, ETC..."}}


{{ Form::label('fieldEscape', 'Field Escape (Optional)')}}
{{ Form::text('fieldEscape')}}

{{ Form::label('table','Table Name (Required)') }}
{{ Form::text('table',null, null,array('required'=>'required')) }}
</br>
{{ Form::label('filename','Load File')}}
{{ Form::file('filename',null, null,array('required'=>'required')) }}
</br>
{{ Form::submit('Upload File') }}
{{Form::close()}}
<div id="debug">
    
    
</div>
@stop
@section('scripts')


@parent
<script type="text/javascript">
    $(document).ready(function ($) {
        console.log('im ready');
        $('#form').on('submit', function (e) {
            e.preventDefault();
            document.getElementById('debug').innerHTML = 'uploading data...';
            var form = $(this);
            
            var formdata = false;
            console.log(new FormData(form[0]));
            if(window.FormData){
                formdata = new FormData(form[0]);
                console.log(formdata);
            }
            var formAction = form.attr('action');
            console.log('\r\n Im in the submit area');
            var token = $('input[name_token]').val();
            var primaryKey = $('#primaryKey').val();
            var fieldDelimiter = $('#fieldDelimiter').val();
            var fieldEscape = $('#fieldEscape').val();
            var table = $('#table').val();
            var filename = $('#filename').val();
            var action = "{{ URL::action('DataimportController@upload')}}";
            //var formData = 'primarykey=' + primaryKey + '&fielddelimiter=' + fieldDelimiter + '&fieldescape=' + fieldEscape + '&table=' + table + '&filename=' + filename;

            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                type: "POST",
                url: action,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType : false,
                processData : false,
                success: function (data) {
                    //console.log(data);
                    document.getElementById('debug').innerHTML =  data;
                    //alert('done ' + data);
                    $('#upload_form').trigger('reset');
                    document.getElementById('busy-icon').innerHTML = "Upload Complete";
                    
                },
                statusCode:
                        {
                            500: function(data){
                               document.getElementById('debug').innerHTML =  data;
                            }
                        }
                

            }, 'json');

            //prevent the form from actually submitting in browser
            return false;
//$('#dashcontent').load('uploaded');
        });
    });
</script>
@stop