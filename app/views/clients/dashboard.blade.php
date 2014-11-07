@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
    <li role='presentation' class='active' id="home-li"><a href='#' id='home'>Home</a></li>
    <li role='presentation' id="roster-li"><a href='#' id='roster'>Roster</a></li>
    <li role='presentation' id="information-li"><a href='#' id='info'>Information</a></li>
    <li role='presentation' id="providers-li"><a href='#' id='providers'>Providers</a></li>
    <li role='presentation' id="activity-li"><a href='#' id='activity'>Activity</a></li>
    <li role='presentation' id="reports-li"><a href='#' id='reports'>Reports<span class="badge">42</span></a></li>


</ul>
<span id="busy-icon"></span>

<div class='container' id='pane'>


</div>

@stop

@section('scripts')

@parent
<script>
    $(function () {
        $('#roster').click(function () {
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                url: "{{URL::action('ClientsController@index')}}",
                type: "get",
                success: function (data) {
                    //alert(data);
                    document.getElementById('pane').innerHTML = data;
                    $('.dtable').dataTable();
                    document.getElementById('busy-icon').innerHTML = "";
                }

            });
            return false;
        });

        
 $('#info').click(function () {
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                url: "{{URL::action('ClientsController@create')}}",
                type: "get",
                success: function (data) {
                    //alert(data);
                    document.getElementById('pane').innerHTML = data;
                    $('.dtable').dataTable();
                    document.getElementById('busy-icon').innerHTML = "";
                }

            });
            return false;
        });

        $('ul li a').click(function () {
            $('ul li.active').removeClass('active');
            $(this).closest('li').addClass('active');
        });

    });
</script>

@stop


