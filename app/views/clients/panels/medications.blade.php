@extends("layouts.panel")


@section('panel')
{{ Former::horizontal_open()
    ->id("frm-medications")
    ->method("POST")
    ->class("navbar-form navbar-left")
}}


<div class='panel panel-default'>
    <div class="panel-body">
        
        <div class="input-group-sm">
            
            <br />
            
            
            <span class="form-group-sm form-inline">
            {{ Former::text("something")
                ->class("form-control form-inline input-group-sm")
                ->placeholder("")
    }}</span>
            
            
            
            
        </div>
    
    
    
</div>


@overwrite