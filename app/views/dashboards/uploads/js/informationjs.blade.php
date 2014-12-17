@section('panel-scripts')

@parent


<script>

$(document).on('click', '#upload-information', function(e){
   e.preventDefault();
   alert('Information Clicked');
   $.ajax({
       type:'GET',
       url:'{{URL::action("UploadController@selected")}}',
       data: 'selected='+$("#current-entity").text(),
       success: function(data){
           
           $('#pane').html(data);
           table = $('.dtable').dataTable({
                    "dom": 'T<"clear">lfrtip',
                            "tableTools": {
                            "sRowSelect": "single",
                                    "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                            }
                    });
            
        
        
       }
   });
   
});

$(document).on('click', '#refreshtable', function(e){
    
    alert('YOU CLICKED IT STINKEY');
    $.ajax({
       type:'GET',
       url:'{{URL::action("UploadController@selected")}}',
       data: 'selected='+$("#current-entity").text()+'&total='+$('#maxrow').val()+'&offset='+$('#minrow').val(),
       success: function(data){
           
           $('#pane').html(data);
           table = $('.dtable').dataTable({
                    "dom": 'T<"clear">lfrtip',
                            "tableTools": {
                            "sRowSelect": "single",
                                    "sSwfPath": "../js/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                            }
                    });
            
        
        
       }
   });
    
});


</script>


@stop