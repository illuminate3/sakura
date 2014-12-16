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
           
       }
   });
   
});

</script>


@stop