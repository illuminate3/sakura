@extends('layouts.panel')

@section('panel')
<div class="panel"><div class="panel-body panel-primary col-lg-12">
{{
Former::open()
    ->id("frm-information")
    ->method("POST")
    ->class("panel-body")
}}

{{
Former::populate(array(
'org_id'        => $organization->org_id,
'title'         =>$organization->title,
'description'   =>$organization->description,
'address1'      =>$organization->address->address->address1,
'address2'      =>$organization->address->address->address2,
'city'          =>$organization->address->address->zip_code_id,
'state'         =>$organization->address->address->zip_code_id,
'zipcode'       =>$organization->address->address->zip_code_id,
'local'         =>$organization->phone->local,
'tollfree'      =>$organization->phone->tollfree,
'fax'           =>$organization->phone->fax,
        
           ))
}}
{{ Former::hidden("org_id")}}
{{ Former::group('General Information:')}}
<br/><div class="row">
<div class="col-lg-12">
    <div class="col-sm-2">
        <label class='label label-primary' for='title'>Title:</label>
{{ Former::text('title')
    ->class('form-control')
    ->placeholder('title')

}}
    </div>
    <div class="col-lg-4 pull-left">
        <label class='label label-primary' for='description'>Description</label>
{{ Former::textarea('description')
    ->class('form-control')
    ->placeholder('description')
}}
    </div>
    </div>
    </div>



<div class="row">
<div class="col-xs-2">
    <label class='label label-primary' for='address1'>Street Address</label>
{{ Former::text('address1')
    ->class('form-control')
    ->placeholder('address1')
}}
</div>
<div class="col-xs-1">
    <label class='label label-primary' for='address2'>Building/Unit</label>
{{ Former::text('address2')
    ->class('form-control')
    ->placeholder('address2')
}}
</div></div>
<div class="row">
<div class="col-sm-2">
    <label class='label label-primary dropdown' for='city'>City</label>
{{ Former::select("city")
    ->fromQuery(\Zipcode::all(),"City","zip_code_id")
    ->class("form-control form-inline input-group-sm")
    ->setAttribute("onchange","$('#zipcode').val($('#city').val());")
}}
</div>
<div class="col-sm-1">
    <label class='label label-primary dropdown' for='state'>State</label>
{{ Former::select("state")
    ->fromQuery(\Zipcode::all(),"State","zip_code_id")
    ->class("form-control form-inline input-group-sm")
    ->setAttribute("onchange","$('#state').val($('#city').val());")
}}
</div>
<div class="col-xs-2">
    <label class='label label-primary dropdown' for='zipcode'>Zipcode</label>
{{ Former::select("zipcode")
->fromQuery(\Zipcode::all(), "ZIPCode", "zip_code_id")
->class("form-control form-inline input-group-sm")
->setAttribute("onchange","$('#city').val($('#zipcode').val());")
}}
</div>
</div>
<div class="row">
<div class="col-sm-2">
    <label class='label label-primary' for='local'>Local</label>
{{ Former::text('local')
->class('form-control form-inline')
->placeholder('local')
}}
</div>
<div class="col-sm-2">
    <label class='label label-primary' for='tollfree'>Toll Free</label>
{{ Former::text('tollfree')
->class('form-control form-inline')
->placeholder('tollfree')
}}
</div>
<div class="col-sm-2">
    <label class='label label-primary' for='fax'>Fax</label>
{{ Former::text('fax')
->class('form-control form-inline')
->placeholder('fax')
}}
</div>
</div>
</div><div class="row"><br />
<div class="col-lg-1">
<div class="btn btn-primary" onclick="saveInformation();">Save</div>
</div></div>
{{ Former::close() }}
</div>


@stop