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
'city'=>$organization->address->address->zip_code_id,
'state'=>$organization->address->address->zip_code_id,
'zipcode'=>$organization->address->address->zip_code_id,
'local'=>$organization->phone->local,
'tollfree'=>$organization->phone->tollfree,
'fax'=>$organization->phone->fax,
        
           ))
}}
{{ Former::hidden("org_id")}}
{{ Former::group('General Information:')}}
<br/><div class="row">
<div class="col-sm-12">
    <div class="col-sm-4"><label class='label label-primary' for='title'>Title:</label>
{{ Former::text('title')
->class('form-control')
->placeholder('title')

}}
    </div>
    <div class="col-sm-6"><label class='label label-primary' for='description'>Description</label>
{{ Former::textarea('description')
->class('form-control')
->placeholder('description')
}}
    </div>
</div>
    </div>
{{ Former::text('address1')
->class('form-control')
->placeholder('address1')
}}
{{ Former::text('address2')
->class('form-control')
->placeholder('address2')
}}
{{ Former::select("city")
->fromQuery(\Zipcode::all(),"City","zip_code_id")
->class("form-control form-inline input-group-sm")
->setAttribute("onchange","$('#zipcode').val($('#city').val());")
}}


{{ Former::select("state")
->fromQuery(\Zipcode::all(),"State","zip_code_id")
->class("form-control form-inline input-group-sm")
->setAttribute("onchange","$('#state').val($('#city').val());")
}}


{{ Former::select("zipcode")
->fromQuery(\Zipcode::all(), "ZIPCode", "zip_code_id")
->class("form-control form-inline input-group-sm")
->setAttribute("onchange","$('#city').val($('#zipcode').val());")
}}
{{ Former::text('local')
->class('form-control')
->placeholder('local')
}}
{{ Former::text('tollfree')
->class('form-control')
->placeholder('tollfree')
}}
{{ Former::text('fax')
->class('form-control')
->placeholder('fax')
}}

@stop