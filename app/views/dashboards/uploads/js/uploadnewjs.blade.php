

    @section('panel-scripts')
    @parent
<script>
$(document).on('click', '#upload-new', function(){
    alert('clicked upload new'); 
    $.ajax({
            type: "get",
            url: '{{ URL::action("UploadController@newUpload")}}',
            success: function(data){
                
                $("#pane").html(data);
                
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
