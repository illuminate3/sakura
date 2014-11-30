@extends('layouts.base')

@section('content')
@parent
{{-- We call the textbox question, but must refer to body column when sending to database --}}
{{ Form::open(array('action' => 'QuestionController@store', 'method'=>'post', 'id'=>'frm-add-question', 'class'=>'navbar-form navbar-left'))}}
<div class='panel panel-default'><span id='busy-icon'></span>
    {{ Form::label('question', 'Question Body') }}
    {{ Form::text('question')}}
    {{ Form::submit('save')}}
    {{ Form::close()}}
</div>
@stop

@section('scripts')
@parent
<script>
    $("document").ready(function($) {

        $('#frm-add-question').on('submit', function(e) {

            e.preventDefault();

            var token = $('input[name=_token]').val();
            var question = $('#question').val();
            var action = "{{ URL::action('QuestionController@store')}}";
            // body is the name of the column in the db
            var formData = 'body=' + question;
            // we should do saving animation herre id='busy-icon'
            document.getElementById('busy-icon').innerHTML = "<img src='../../images/load-wings-small.gif'/>";

            if (question === "")
            {
                document.getElementById('body').focus();
                document.getElementById('busy-icon').innerHTML = "";
                return false;
            }

            $.ajax({
                type: "post",
                url: action,
                data: formData,
                success: function(data) {
                    console.log(data);
                    $('#frm-add-question').trigger("reset");
                    document.getElementById('busy-icon').innerHTML = "Save Complete. Enter new Question.";
                }
            }, 'json');
            return false;
        });
    });
</script>
@stop