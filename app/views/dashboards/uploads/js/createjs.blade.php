
@section('panel-scripts')
@parent
<script type="text/javascript">

        $(document).on('click','#upload-file', function(e) {
            e.preventDefault();
            alert('upload-file clicked');
            var form = $(this);

            var formdata = false;
            alert($('#file-form').serialize() + '&filename='+$('#filename').val());
            var formAction = form.attr('action');
            console.log('\r\n Im in the submit area');
            var token = $('input[name_token]').val();
            var primaryKey = $('#primaryKey').val();
            var fieldDelimiter = $('#fieldDelimiter').val();
            var fieldEscape = $('#fieldEscape').val();
            var table = $('#table').val();
            var filename = $('#filename').val();
            var action = "{{ URL::action('DataimportController@upload')}}";
            var formData = 'primarykey=' + primaryKey + '&fielddelimiter=' + fieldDelimiter + '&fieldescape=' + fieldEscape + '&table=' + table + '&filename=' + filename;
            alert(formData);
            document.getElementById('busy-icon').innerHTML = "<img src='../images/load-wings-small.gif'/>";
            $.ajax({
                type: "post",
                url: action,
                data: $('#file-form').serialize() + '&filename='+$('#filename').val(),
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    //console.log(data);
                    
                    //alert('done ' + data);
                    $('#upload_form').trigger('reset');
                    document.getElementById('busy-icon').innerHTML = data;

                },
                statusCode:
                        {
                            500: function(data) {
                                console.log(data);
                            }
                        }


            }, 'json');

            //prevent the form from actually submitting in browser
            return false;
        });
</script>

@stop
