@extends('layouts.master')
@section('content')
<script type="text/javascript">
 
$(function() {
 
    $(".search_button").click(function() {
        // getting the value that user typed
        var searchString    = $("#search_box").val();
        // forming the queryString
        var data            = 'search='+ searchString;
         
        // if searchString is not empty
        if(searchString) {
            // ajax call
            $.ajax({
                type: "POST",
                url: "{{URL::action('\Jleach\Dataimport\Controllers\UploadController@show')}}",
                data: data,
                beforeSend: function(html) { // this happens before actual call
                    $("#results").html(''); 
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // this happens after we get results
                    $("#results").show();
                    $("#results").append(html);
              }
            });    
        }
        return false;
    });
});
</script>
{{ Form::open(
                        array(
                        'url'=>'/dataimportload',
                        'files'=>true,
                        'action' => 'UploadController@getUploads',
                        'enctype' => 'multipart/form-data',
                        'method' => 'PUT'
                        )
                        ) }}
{{ Form::select('uploads', $data)}}
{{ Form::button('select', array('type'=>'button','name'=>'search_button', 'class'=>'btn btn-primary openbutton',)  )   }}
{{ Form::close()  }}


</br>
<div id="dashcontent">
</div>
{{ Request::url() }}



@stop

