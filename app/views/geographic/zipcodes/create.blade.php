@extends('layouts.base')






@section('content')

@parent
<div class='container'>
    <span id='busy-icon'></span>
    <div class='panel'>
        {{ Form::open(array('action' => 'ZipcodeController@postIndex', 'method' => 'post', 'id' => 'frm-add-zipcode', 'class'=>'navbar-form navbar-left'))}}
        <div class='input-group input-group-sm'>

            <span class='input-group-addon'>City</span>
            {{ Form::text('city', '', array('class'=>'form-control form-sm', 'id' => 'city'))}}
        </div>
        <div class='input-group input-group-sm'>
            <span class= 'input-group-addon'>State</span>
            {{ Form::text('state', '',array('class'=>'form-control form-sm', 'id'=>'state'))}}
        </div>
        <div class ='input-group input-group-sm'>
            <span class='input-group-addon'>Zip Code</span>
            {{ Form::text('zipcode', '', array('class'=>'form-control form-sm', 'id'=>'city'))}}

        </div>


        <button class='form-control btn btn-default'>Save</button>
    </div>
</div>
{{ Form::close() }}

@stop


@section('scripts')

@parent
<script>
    $("document").ready(function($) {

        $('#frm-add-zipcode').on('submit', function(e) {

            e.preventDefault();

            var token = $('input[name=_token]').val();
            var city = $('#city').val();
            var state = $('#state').val();
            var zipcode = $('#zipcode').val();
            var action = "{{ URL::action('ZipcodeController@postIndex')}}";
            var formData = 'city=' + city + '&state=' + state + '&code=' + zipcode;
            // we should do saving animation herre id='busy-icon'
            document.getElementById('busy-icon').innerHTML = "<img src='../../images/load-wings-small.gif'/>";
            if (city === "")
            {
                document.getElementById('city').focus();
                document.getElementById('busy-icon').innerHTML = "";
                return false;
            } else
            if (state === "") {
                document.getElementById('state').focus();
                document.getElementById('busy-icon').innerHTML = "";
                return false;
            } else
            if (zipcode === "")
            {
                document.getElementById('zipcode').focus();
                document.getElementById('busy-icon').innerHTML = "";
                return false;
            }

            $.ajax({
                type: "post",
                url: action,
                data: formData,
                success: function(data) {
                    console.log(data);
                    $('#frm-add-zipcode').trigger("reset");
                    document.getElementById('busy-icon').innerHTML = "Save Complete. Enter new Zipcode.";
                }
            }, 'json');
            return false;
        });
    });
</script>
@stop
