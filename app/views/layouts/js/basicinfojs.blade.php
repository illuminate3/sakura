
@section('panel-scripts')

@parent

<script>

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */
  function saveBasicInfo(){
            alert("Saving!");
            //e.preventDefault();
            var forminfo = $("#frm-basic-info").serialize();
            alert(forminfo);
            var token = $("input[name=_token]").val();
            var action = '{{ URL::action("ClientsController@storeBasicInfo")}}';
            document.getElementById("busy-icon").innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                type: "post",
                url: action,
                data: forminfo,
                success: function (data) {
                    console.log(data);
                    $("#frm-basic-info").trigger("reset");
                    document.getElementById("busy-icon").innerHTML = "Save Complete.";
                }
            }, "json");
            return false;
        }
        
        
            $('#link-basic-info').click(function(){
            
            $('li.active').removeClass('active');
            $(this).closest('li').addClass('active');
            
        });

</script>

@stop