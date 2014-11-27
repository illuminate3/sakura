@extends('layouts.base')

@section('content')
<ul class='nav nav-pills' role='tablist'>
    <li role='presentation' class='dashboard-li active' id="home-li"><a href='#' id='home'>Home</a></li>
    <li role='presentation' class='dashboard-li' id="roster-li"><a href='#' id='roster'>Roster</a></li>
    <li role='presentation' class='dashboard-li' id="information-li"><a href='#' id='info'>Information</a></li>
    <li role='presentation' class='dashboard-li' id="contacts-li"><a href='#' id='contacts'>Contacts</a></li>
    <li role='presentation' class='dashboard-li' id="reports-li"><a href='#' id='reports'>Reports<span class="badge">42</span></a></li>
    <li role='presentation' class='dashboard-li' id='current-entity-li'><span  class="">Organization:</span><span hidden='hidden' id='current-entity'></span><span id='current-entity-title'></span></li>

</ul>
<span id="busy-icon"></span>

<div class='container-fluid' id='pane'>


</div>

@stop

@section('scripts')

@parent
<script>
    $(function () {
        
        
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
        
        $('#roster').click(function () {
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                url: "{{URL::action('OrganizationController@index')}}",
                type: "get",
                success: function (data) {
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
        $('.dtable tbody').on( 'click', 'tr', function () {        
           //console.log($("td:first", this).text());
           $('#current-entity').html($("td:first", this).text());
           $('#current-entity-title').html($("td:nth-child(2)", this).text());
        } );
         }

            });
            return false;
        });

        $('#info').click(function () {
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                url: "{{URL::action('OrganizationController@create')}}",
                data: 'selected='+$('#current-entity').text(),
                type: "get",
                success: function (data) {
                    document.getElementById('pane').innerHTML = data;
                
                    document.getElementById('busy-icon').innerHTML = "";
                }
                    
            });
            return false;
        });

        $('ul li a').click(function () {
            $('ul li.active').removeClass('active');
            $(this).closest('li').addClass('active');
        });
        
        
        $(document).on('click', '.panel-label',function () {
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";   
            $('.panel-label').removeClass('active');
            $(this).closest('li').addClass('active');
            return false;
        });
        
        $(document).on('click','#link-basic-info', function(){
            var selected = $('#current-entity').text();
            $.ajax({
                url: "{{URL::action('OrganizationController@information')}}",
                type: "GET",
                data: 'selected='+selected,
                success: function(data){
                    document.getElementById('busy-icon').innerHTML = "";
                    document.getElementById('info-panel').innerHTML = data;
                    
                }
            });
            return false;
        });
        
        // MEDICATIONS SECTION 
        $(document).on('click','#link-meds', function(){
            $.ajax({
                url: "{{URL::action('ClientsController@medications')}}",
                type: "GET",
                success: function(data){
                    document.getElementById('busy-icon').innerHTML = "";
                    document.getElementById('info-panel').innerHTML = data;
                }
            });
            return false;
        });
        
        $(document).on('click', '#link-biography', function(){
            var selected = $('#current-entity-title').text();
            $.ajax({
                url: "{{URL::action('ClientsController@biography')}}",
                type: 'GET',
                data: 'selected='+selected,
                success: function(data){
                    document.getElementById('busy-icon').innerHTML = "";
                    document.getElementById('info-panel').innerHTML = data;
                }
            });
            return false;
            
        });   
        
        
        $(document).on('change', '#meds-search', function(){
            var term = $('#meds-search').val();
            var type = $('#field-select-medication').val();
            if(term.length > 3){
               $.ajax({
                    url: "{{URL::action('MedicationController@getMedicationDropdown')}}",
                    data: 'term='+term+'&type='+type,
                    type: "GET",
                    success: function(data){
                        document.getElementById('meds-dropdown').innerHTML = data;
                    }
                }); 
            }
            return false;
        });
        
        $(document).on('change', '#meds-dropdown', function(){
            
            var medication = $('#medication').val($(this).find('option:selected').attr('value'));
            $.ajax({
                url: "{{URL::action('MedicationController@getDetails')}}",
                data: 'medication=' + $('#medication').find('option:selected').attr('value'),
                type: "GET",
                success: function(data){
                    document.getElementById('medication-details').innerHTML = data;
                                   //document.getElementById('pane').innerHTML = data;
            /*        table = $('.dtable').dataTable({
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sRowSelect": "single",
                "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
        }
        });*/
                }
            });
            return false;
        });
        
        $(document).on('click', '#add-medication', function(event){
        
            event.preventDefault();
        });
           
        $(document).on('ready', '#client-medication-select', function(){
            
            alert('empty select box thing loaded!!!!! ALERT THE CITIZENS!!!!');
            
        });
    });
    
       
    
    @section('panel-scripts')
    
@include('dashboards.organizations.js.basicinfojs')

@stop
    
</script>

@stop


