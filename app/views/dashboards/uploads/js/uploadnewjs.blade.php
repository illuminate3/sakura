

    @section('panel-scripts')
    @parent
<script>
$(document).on('click', '#upload-new', function(){
    alert('clicked upload new');
});

    console.log('loaded uploadnew.js');
    
 </script>
   
    
    @stop
