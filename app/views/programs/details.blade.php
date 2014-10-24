


<div><strong>Title:</strong>
    <h3>  {{$program->title}}</h3>
</div>
<br />
<strong> Program Description </strong><br />
<div>{{$program->description}}</div>
<strong>Needs:</strong>
@foreach($program->needs as $need)
<li><strong>{{$need->title}}</strong><br /> {{$need->description}}</li>
@endforeach