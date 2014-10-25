@extends('layouts.base')

@section('title')

@parent

@stop


@section('content')
{{ Form::open(array('action' => 'NeedController@postNeed', 'method' => 'post', 'id' => 'frm-add-need', 'class'=>'navbar-form navbar-left'))}}
<div class='form-group'>
    <h1><span class='label label-default'>Title
{{ Form::text('title', '', array('class'=>'form-control', 'id' => 'title'))}}
    </span></h1>
    <h1> <span class= 'label label-default'>Description
{{ Form::text('description', '',array('class'=>'form-control', 'id'=>'description'))}}
        </span></h1>
</div>
<div>
{{ Form::submit('Create Need', array('class'=>'form-control btn btn-default'))}}
</div>
{{ Form::close() }}

@stop


@section('scripts')

@parent
<script>
    $("document").ready(function( $ ){
      
        
        $( '#frm-add-need').on('submit', function(e){
            
            e.preventDefault();
           
            var token = $('input[name=_token]').val();
            var title = $('#title').val();
            var description = $('#description').val();
            var action = "{{ URL::action('NeedController@postNeed')}}";
            var formData = 'title='+title+'&description='+description;
       // we should do saving animation herre
            if(title==="")
            {
                alert("Enter title");
                document.getElementById('title').focus();
                return false;
            }
            $.ajax({
                type: "post",
                url : action,
                data: formData,
                success : function(data){
                    console.log(data);
                    $('#frm-add-need').trigger("reset");
                }
            }, 'json');
            return false;
        });   
    });
</script>
@stop
