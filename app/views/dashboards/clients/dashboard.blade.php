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
    var client_meds_table = null;
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
    $(document).submit(function(event){
        
        event.preventDefault();
        
    });
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
                    $.ajax({
                        url: "{{URL::action('ClientsController@setCurrentClient')}}",
                        type: "post",
                        data: $('#current-entity').text()
                    });
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
            data: "selected="+$('#current-entity').text(),
            success: function(data) {
            document.getElementById('busy-icon').innerHTML = "";
            document.getElementById('info-panel').innerHTML = data;
            $("#start-date").datepicker();
            $("#end-date").datepicker();
            //if (med_search_table === null){
           // med_search_table = $('.dtable').dataTable({
           // "dom": 'T<"clear">lfrtip',
           //         "tableTools": {
           //         "sRowSelect": "single",
           //                 "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
           //         }
           // });
            //}
//            if (client_meds_table === null){
                //alert('making data table?');
            client_meds_table = $('#client-meds-table').dataTable({
                    paging      : false,
                    scrollY     : "100px",
                    "dom"       : 'T<"clear">lfrtip',
                    "tableTools": {
                    "sRowSelect": "single",
                     "sSwfPath" : "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                    }
            });
           // }
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
            if (term.length >= 3) {
            $.ajax({
            url: "{{URL::action('MedicationController@getMedicationTable')}}",
            data: 'term=' + term + '&type=' + type,
            type: "GET",
            success: function(data) {
            //document.getElementById('search-window').innerHTML = "";
            document.getElementById('search-window').innerHTML = data;
           // med_search_table = null;
            med_search_table = $('#searchtable').dataTable({
                    paging      : false,
                    scrollY     : "100px",
                    "dom"       : 'T<"clear">lfrtip',
                    "tableTools": {
                    "sRowSelect": "single",
                     "sSwfPath" : "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                    }
            });
           
           
            }
    });
    }
    
    });
    
    $(document).on('click', '#searchtable tr', function() {
      
    $.ajax({
    url: "{{URL::action('MedicationController@getDetails')}}",
            data: 'medication=' + $("td:first", this).text(),
            type: "GET",
            success: function(data) {
            document.getElementById('med-details').innerHTML = data;
            }
    });
            return false;
    });
    
    $(document).on('click', '#client-meds-table tr', function(){
       //alert($("td:first", this).text());
         alert($('td:nth-child(3)', this).text());
         alert($('td:nth-child(4)', this).text());
        $.ajax({
            url: "{{URL::action('ClientMedicationController@getClientMedication')}}",
            data: 'medication=' + $("td:first", this).text()+'&selected='+ $('#current-entity').text()+'&started='+$('td:nth-child(3)', this).text()+'&stopped='+$('td:nth-child(4)', this).text(),
            type: "GET",
            success:function(data){
               $('#client-med-form').html(data);
            }
        });
        
    });
    
    $(document).on('change','#organization-select', function(){
       //alert('selected org'); 
       var selected = $('#current-entity').text();
       var organization = $('option:selected',$(this)).val();
       alert('organization: '+ organization);
       $.ajax({
          data:"selected="+selected+"&organization="+organization,
          url: "{{URL::action('ContactController@getContactsListBox')}}"  ,
          type: "GET",
          success:function(data){
              $("#prescriber-area").html(data);
          } 
       });
    });
    
    $(document).on('click', '#add-new-contact', function(e){
       $.magnificPopup.open({
  items: {
    src: "{{URL::action('ContactController@getContactPopup')}}"
  },
  type: 'ajax',

callbacks: {
  parseAjax: function(mfpResponse) {
    // mfpResponse.data is a "data" object from ajax "success" callback
    // for simple HTML file, it will be just String
    // You may modify it to change contents of the popup
    // For example, to show just #some-element:
    // mfpResponse.data = $(mfpResponse.data).find('#some-element');
    
    // mfpResponse.data must be a String or a DOM (jQuery) element
    
    console.log('Ajax content loaded:', mfpResponse);
    
  },
  verticalFit: true,
  ajaxContentAdded: function() {
    // Ajax content is loaded and appended to DOM
    console.log(this.content);
    $('.mfp-container').html(this.content);
  }
}
});
e.preventDefault;
return false;
});
        
        
    $(document).on('click', '#add-new-organization', function(e){
       $.magnificPopup.open({
  items: {
    src: "{{URL::action('OrganizationController@getOrganizationPopup')}}"
  },
  type: 'ajax',

callbacks: {
  parseAjax: function(mfpResponse) {
    // mfpResponse.data is a "data" object from ajax "success" callback
    // for simple HTML file, it will be just String
    // You may modify it to change contents of the popup
    // For example, to show just #some-element:
    // mfpResponse.data = $(mfpResponse.data).find('#some-element');
    
    // mfpResponse.data must be a String or a DOM (jQuery) element
    
    console.log('Ajax content loaded:', mfpResponse);
    
  },
  verticalFit: true,
  ajaxContentAdded: function() {
    // Ajax content is loaded and appended to DOM
    console.log(this.content);
    $('.mfp-container').html(this.content);
  }
}
});
e.preventDefault;
return false;
});        
   
    $(document).on('click', '#add-medication', function(event) {
        alert('adding medication');
    event.preventDefault();
    });
    $(document).on('click', '#client-medication-select', function() {

    alert('empty select box thing loaded!!!!! ALERT THE CITIZENS!!!!');
    });
    });
    @section('panel-scripts')

        @include('dashboards.clients.js.basicinfojs' )

    @stop

</script>

@stop


