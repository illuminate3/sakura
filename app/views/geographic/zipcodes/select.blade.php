@extends('layouts.base')

@section('content')
{{Former::horizontal_open()}}
{{Former::select('cities')->options($cities)}}
{{Former::select('zipcodes')->options($zipcodes)}}
{{Former::close()}}
<div id='test'>



</div>
@stop


@section('scripts')

@parent
<script>
    $('#cities').change(function() {
        var zipcode = $('#cities').val();
        $('#zipcodes').val(zipcode);
    });

    $('#zipcodes').change(function() {
        var city = $('#zipcodes').val();
        $('#cities').val(city);
    });

</script>
@stop

