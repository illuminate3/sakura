@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
    <li role='presentation' class='active'><a href='#' id='home'>Home</a></li>
    <li role='presentation'><a href='#' id='demographics'>Demographics</a></li>
    <li role='presentation'><a href='#' id='enrollment'>Enrollment</a></li>
    
    
</ul>


<div class='container' id='pane'>


</div>

@stop

@section('scripts')

@parent
<script>
$(function(){
    $('#home').click(function(){
       $.ajax({
           url: "{{URL::action('ClientsController@index')}}",
           type:"get",
           success:function(data){
               alert(data);
               document.getElementById('pane').innerHTML = data;
               $('.dtable').dataTable();
           }
           
       }); 
        return false;
    });
    
});
</script>

@stop


