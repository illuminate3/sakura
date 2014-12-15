
@section('scripts')
@parent
<script>

$(document).on('click', 'ul li a', function() {
    $('ul li.active').removeClass('active');
            $(this).closest('li').addClass('active');
    });
    
</script>

@stop