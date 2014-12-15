@extends('layouts.base')
@section('content')
{{ Form::open(['id'=>'getUpload','method'=>'post'])}}
{{ Form::text('data', null)}}
{{ Form::submit('Select Item')   }}
{{ Form::close()  }}
<div id="searchresults">
    <ul id="results" class="update">
    </ul>
</div>

</br>
<div id="dashcontent">
</div>
{{ Request::url() }}

@stop