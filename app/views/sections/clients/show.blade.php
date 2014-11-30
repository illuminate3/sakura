@extends('layouts.base')

@section('title')
@parent
:: User Details
@stop



@section('scripts')

@parent
<script>
    $(document).ready(function() {
        $('#allClient').dataTable();
    });


</script>
@stop


@section('content')




<div class="page-header">
    <h4>All Clients</h4>
</div>
{{ var_dump($client) }}
@stop
