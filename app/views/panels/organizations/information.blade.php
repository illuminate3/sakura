@extends('layouts.panel')

@section('panel')
{{
Former::open()
    ->id("frm-information")
    ->method("POST")
    ->class("panel-body")
}}

{{
Former::populate(array(
        'org_id'    => $organization->org_id,
'title'=>$organization->title,
'description'=>$organization->description,
'address1'=>$organization->address->address->address1,
'address2'=>$organization->address->address->address2,
'city'=>$organization->address->address->city,
'state'=>$organization->address->address->state,
'zipcode'=>$organization->address->address->zipcode,
'local'=>$organization->phone->local,
'tollfree'=>$organization->phone->tollfree,
'fax'=>$organization->phone->fax,
        
           ))
}}
@stop