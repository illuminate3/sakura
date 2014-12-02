@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
    <li role='presentation' class='dashboard-li active' id="home-li"><a href='#' id='home'>Home</a></li>
    <li role='presentation' class='dashboard-li' id="roster-li"><a href='#' id='roster'>Roster</a></li>
    <li role='presentation' class='dashboard-li' id="information-li"><a href='#' id='info'>Information</a></li>
    <li role='presentation' class='dashboard-li' id="providers-li"><a href='#' id='providers'>Providers</a></li>
    <li role='presentation' class='dashboard-li' id="activity-li"><a href='#' id='activity'>Activity</a></li>
    <li role='presentation' class='dashboard-li' id="reports-li"><a href='#' id='reports'>Reports<span class="badge">42</span></a></li>
    <li role='presentation' class='dashboard-li' id='current-entity-li'><span  class="">MTK:</span><span id='current-entity'></span></li>

</ul>
<span id="busy-icon"></span>

<div class='container-fluid' id='pane'>


</div>

@stop

@section('scripts')

@parent
<script>
    var med_search_table = null;
    var client_med_table = null;
    $(function() {


    /**
     * Roster Section :: 
     * setup datatable,
     * configure selection action
     * acquire model through AJAX
     */

    /* var table = $('.dtable').dataTable({
     dom: 'T<"clear">lfrtip',
     "tableTools": {
     "sRowSelect": "single",
     "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
     }});*/

    $('#roster').click(function() {
    document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
            url: "{{URL::action('ClientsController@index')}}",
                    type: "get",
                    success: function(data) {
                    document.getElementById('pane').innerHTML = data;
                            table = $('.dtable').dataTable({
                    "dom": 'T<"clear">lfrtip',
                            "tableTools": {
                            "sRowSelect": "single",
                                    "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                            }
                    });
                            /**
                             * Dtable Action SEQUENCE GO 
                             * Grab the selected entity from the roster
                             * slap it in a span on the top o' the dashboard.
                             * 
                             */
                            document.getElementById('busy-icon').innerHTML = "";
                            $('.dtable tbody').on('click', 'tr', function() {
                    //console.log($("td:first", this).text());
                    $('#current-entity').html($("td:first", this).text());
                    });
                    }

            });
            return false;
    });
            $('#info').click(function() {
    document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
            url: "{{URL::action('ClientsController@create')}}",
                    type: "get",
                    success: function(data) {
                    document.getElementById('pane').innerHTML = data;
                            document.getElementById('busy-icon').innerHTML = "";
                    }

            });
            return false;
    });
            $('ul li a').click(function() {
    $('ul li.active').removeClass('active');
            $(this).closest('li').addClass('active');
    });
            $(document).on('click', '.panel-label', function() {
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $('.panel-label').removeClass('active');
            $(this).closest('li').addClass('active');
            return false;
    });
            $(document).on('click', '#link-basic-info', function() {
    var selected = $('#current-entity').text();
            $.ajax({
            url: "{{URL::action('ClientsController@basicInfo')}}",
                    type: "GET",
                    data: 'selected=' + selected,
                    success: function(data) {
                    document.getElementById('busy-icon').innerHTML = "";
                            document.getElementById('info-panel').innerHTML = data;
                    }
            });
            return false;
    });
            // MEDICATIONS SECTION 
            $(document).on('click', '#link-meds', function() {
    $.ajax({
    url: "{{URL::action('ClientsController@medications')}}",
            type: "GET",
            success: function(data) {
            document.getElementById('busy-icon').innerHTML = "";
            document.getElementById('info-panel').innerHTML = data;
            if (med_search_table === null){
            med_search_table = $('.dtable').dataTable({
            "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                    "sRowSelect": "single",
                            "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                    }
            });
            }
            if (client_med_table === null){
            client_med_table = $('.dtable').dataTable({
            "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                    "sRowSelect": "single",
                            "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                    }
            });
            }
        }
    });
            return false;
    });
            $(document).on('click', '#link-biography', function() {
    var selected = $('#current-entity').text();
            $.ajax({
            url: "{{URL::action('ClientsController@biography')}}",
                    type: 'GET',
                    data: 'selected=' + selected,
                    success: function(data) {
                    document.getElementById('busy-icon').innerHTML = "";
                            document.getElementById('info-panel').innerHTML = data;
                    }
            });
            return false;
    });
    
    $(document).on('keyup', '#meds-search', function() {
            var term = $('#meds-search').val();
            var type = $('#field-select-medication').val();
            if (term.length > 3) {
            $.ajax({
            url: "{{URL::action('MedicationController@getMedicationTable')}}",
            data: 'term=' + term + '&type=' + type,
            type: "GET",
            success: function(data) {
            document.getElementById('search-results-table').innerHTML = data;
                    if (med_search_table === null){
            med_search_table = $('.dtable').dataTable({
            "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                    "sRowSelect": "single",
                            "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                    }
            });
            }
            }
    });
    }
    
    });
            $(document).on('change', '#meds-dropdown', function() {

    $.ajax({
    url: "{{URL::action('MedicationController@getDetails')}}",
            data: 'medication=' + $('#medication').find('option:selected').attr('value'),
            type: "GET",
            success: function(data) {
            document.getElementById('medication-details').innerHTML = data;
            }
    });
            return false;
    });
            $(document).on('click', '#add-medication', function(event) {

    event.preventDefault();
    });
            $(document).on('ready', '#client-medication-select', function() {

    alert('empty select box thing loaded!!!!! ALERT THE CITIZENS!!!!');
    });
    });
            @section('panel-scripts')

            @include('dashboards.clients.js.basicinfojs')

            @stop

</script>

@stop


