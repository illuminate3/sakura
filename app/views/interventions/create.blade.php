@extends('layouts.base')

@section('title')

@parent

@stop


@section('content')

@parent
<div class='container'>
    <span id='busy-icon'></span>
    <div class='panel'>
{{ Form::open(array('action' => 'InterventionController@postIntervention', 'method' => 'post', 'id' => 'frm-add-intervention', 'class'=>'navbar-form navbar-left'))}}
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

        $('#frm-add-intervention').on('submit', function (e) {

            e.preventDefault();

            var token = $('input[name=_token]').val();
            var title = $('#title').val();
            var description = $('#description').val();
            var action = "{{ URL::action('InterventionController@postIntervention')}}";
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
                    $('#frm-add-intervention').trigger("reset");
                    document.getElementById('busy-icon').innerHTML="Save Complete. Enter new Intervention.";
                }
            }, 'json');
            return false;
        });
    });
</script>
@stop
