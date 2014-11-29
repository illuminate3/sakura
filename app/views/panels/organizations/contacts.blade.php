@extends('layouts.panel')
@section('panel')
<div class='col-md-12'>
<span hidden="hidden" id="current-contact"></span><div class="col-md-12 panel-body" id="current-contact-fullname"></div>
<div class="col-md-2 pull-left" id='contact-form'>
    
</div>

<div class="col-sm-5 col-sm-offset-1 pull-left">
<table id='contactstable' class='dtable display' onclick='getSelectedContact();'>
    <thead>
        <tr>
            <th hidden="hidden">id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Phone Number</th>
            
        </tr>
    </thead>
    <tbody>
        
        @foreach($contacts as $contact)
        <tr>
            <td hidden="hidden">{{$contact->contact_id}}</td>
            <td>{{$contact->first}}</td>
            <td>{{$contact->last}}</td>
            <td>{{$contact->title}}</td>
            <td>{{$contact->phone}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
</div>
@stop