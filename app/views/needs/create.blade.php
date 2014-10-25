@extends('layouts.base')

@section('title')

@parent

@stop


@section('content')
{{ Form::open(array('action' => 'NeedController@postNeed', 'method' => 'post', 'id' => 'frm-add-need'))}}
{{ Form::label('title', 'Need Title', array('id'=>'title','class' => 'form'))}}
{{ Form::text('title')}}
{{ Form::label('description', 'Description', array('id'=>'description','class' => 'form'))}}
{{ Form::text('description')}}
{{ Form::submit('Suiibmit the DAAADDTTAAA')}}
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
