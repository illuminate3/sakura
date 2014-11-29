@section('panel-scripts')
@parent
<script>
    
    
function getSelectedContact(){
     $('#contactstable').on( 'click', 'tr', function () {        
           var selected = $("td:first", this).text();
           $('#current-contact').html(selected);
           $('#current-contact-fullname').html($("td:nth-child(2)", this).text()+" "+$("td:nth-child(3)", this).text());
           $.ajax({
               type:"post",
               url: '{{URL::action("ContactController@getDetails")}}',
               data: 'selected='+selected,
               success: function(data){
                
                   document.getElementById('contact-form').innerHTML = data;
               }
               
           },'json');
    return false;    
    } );
         }

            

</script>

@stop
