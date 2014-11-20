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
            <span id="busy-icon"></span>
            <span class="form-group-sm form-inline" >
                {{
                Former::text("meds-search")
                        ->class("form-control input-group-sm")
                        ->placeholder("Search Medications")
                        ->label("Search for Medications")
                        
                }}
                
                {{
                
                Former::select("field-select-medication")
                        ->class("form-control input-group-sm")
                        ->options(array(
                                        1=>'Proprietary Name',            
                                        2=>'Non-Proprietary Name',            
                                        3=>'Substance Name'            
                                  ))
                        ->label("Search in Field:")               
                }}
            </span>
            <br />
            <span class="form-group-sm form-inline" id="meds-dropdown">
               {{
               Former::select("medication")
                            ->class("form-control input-group-sm")
                            ->placeholder('Search for a medication!')
                            ->label("Search Results")               
               }}
               
               
            
            </span> 
            
        </div>
    </div>
    {{ Former::close()}}
    <button id="add-medication">Add Medication</button>
    <div id='medication-details'>
    </div>
    @overwrite