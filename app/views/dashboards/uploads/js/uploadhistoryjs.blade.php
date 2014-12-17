


    @section('panel-scripts')
    @parent
    <script>
    console.log('loaded uploadhistory.js');
    $(document).on('click', '#upload-history', function(e){
        alert('UPLOAD HISTORY CLICKED');
        e.preventDefault();
        $.ajax({
            type: "get",
            url: '{{ URL::action("UploadController@showAll")}}',
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
        return false;
     
    
    
    });
    
    
    
    $(document).on('click','#uploads-table tr', function(){
       alert($("td:nth-child(2)", this).text());
       $('#current-entity').html($("td:first", this).text());
       $('#current-entity-label').html($("td:nth-child(2)", this).text());
        
    });
    </script>
    @stop
    
    
