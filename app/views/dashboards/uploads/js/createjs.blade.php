
@section('panel-scripts')
@parent
<script type="text/javascript">

$( "form" ).on( "submit", function( event ) {
  event.preventDefault();
  console.log( $( this ).serialize() );
});

    /*    $(document).on('submit','#file-form', function(e) {
            
            //alert('upload-file clicked');
            var $form = $(this);
            alert($('#file-form').serialize());
            var formData = false;
            console.log(new FormData($form));
            if (window.FormData) {
                formData = new FormData($form);
                console.log(formData);
            }
            var formAction = $form.attr('action');
            console.log('\r\n Im in the submit area');
            var token = $('input[name_token]').val();
            var primaryKey = $('#primaryKey').val();
            var fieldDelimiter = $('#fieldDelimiter').val();
            var fieldEscape = $('#fieldEscape').val();
            var table = $('#table').val();
            var filename = $('#filename').val();
            var action = "{{ URL::action('UploadController@store')}}";
            //var formData = 'primarykey=' + primaryKey + '&fielddelimiter=' + fieldDelimiter + '&fieldescape=' + fieldEscape + '&table=' + table + '&filename=' + filename;

            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                type: "get",
                url: action,
                data: formData,
                cache: false,
                processData: false,
                success: function(data) {
                    //console.log(data);
                    
                    //alert('done ' + data);
                    $('#upload_form').trigger('reset');
                    document.getElementById('busy-icon').innerHTML = "Upload Stuff";

                },
                statusCode:
                        {
                            500: function(data) {
                                console.log(data);
                            }
                        }


            }, 'json');

            //prevent the form from actually submitting in browser\
            e.preventDefault();
            return false;
        });*/
</script>

@stop
