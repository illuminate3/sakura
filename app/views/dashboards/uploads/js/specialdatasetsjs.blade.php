    @section('panel-scripts')
    @parent
<script>
    console.log('loaded specialdatasets.js');
    $(document).on('click', '#special-datasets-li', function(){
        
        
        alert('clicked special datasets');
    });
    </script>
    @stop
