
@section('panel-scripts')

@parent

<script>

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */
  function saveInformation(){
            alert("informationjs.blade.php");
            //e.preventDefault();
            var forminfo = $("#frm-information").serialize();
            alert(forminfo);
            var token = $("input[name=_token]").val();
            var action = '{{ URL::action("OrganizationController@storeInformation")}}';
            document.getElementById("busy-icon").innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                type: "post",
                url: action,
                data: forminfo,
                success: function (data) {
                    console.log(data);
                    $("#frm-information").trigger("reset");
                    document.getElementById("busy-icon").innerHTML = "Save Complete.";
                }
            }, "json");
            return false;
        }
        
        
            $('#link-information').click(function(){
            
            $('li.active').removeClass('active');
            $(this).closest('li').addClass('active');
            
        });

</script>

@stop