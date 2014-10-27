@extends('layouts.base')

@section('title')

@parent

@stop


@section('content')

@parent
<div class='container'>
    <span id='busy-icon'></span>
    <div class='panel'>
{{ Form::open(array('action' => 'ProgramController@postProgram', 'method' => 'post', 'id' => 'frm-add-program', 'class'=>'navbar-form navbar-left'))}}
<div class='input-group input-group-sm'>
    
    <span class='input-group-addon'>Title</span>
            {{ Form::text('title', '', array('class'=>'form-control form-sm', 'id' => 'title'))}}
        </div>
<div class='input-group input-group-sm'>
<span class= 'input-group-addon'>Description</span>
            {{ Form::text('description', '',array('class'=>'form-control form-sm', 'id'=>'description'))}}
</div>
    


    <button class='form-control btn btn-default'>Save</button>
</div>
</div>
{{ Form::close() }}

@stop


@section('scripts')

@parent
<script>
    $("document").ready(function ($) {

        $('#frm-add-program').on('submit', function (e) {

            e.preventDefault();

            var token = $('input[name=_token]').val();
            var title = $('#title').val();
            var description = $('#description').val();
            var action = "{{ URL::action('ProgramController@postProgram')}}";
            var formData = 'title=' + title + '&description=' + description;
            // we should do saving animation herre id='busy-icon'
            document.getElementById('busy-icon').innerHTML="<img src='../images/load-wings-small.gif'/>";
            if (title === "")
            {
                document.getElementById('title').focus();
                document.getElementById('busy-icon').innerHTML="";
                return false;
            } else
            if (description === "") {
                document.getElementById('description').focus();
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
