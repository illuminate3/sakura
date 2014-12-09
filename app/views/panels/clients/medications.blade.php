@extends("layouts.panel")


@section('panel')
<div class='container-fluid'>

    {{ Former::horizontal_open()
    ->id("frm-medications")
    ->method("POST")
    ->class("form-horizontal")
    
    }}

    <span class='popover' id="busy-icon"></span>
    <div class="row">
        <div class='panel panel-default'>
            <div class="panel-body">

                <div id='meds-pane-details' class="well pull-right col-sm-4">
                    <span class='label label-primary'> Item Details</span>    

                    <div class='' id='med-details' style='max-height: 150px; min-height: 150px; overflow:scroll;'>
                    </div>
                </div>

                <div class='col-sm-2 pull-left' >




                    {{
                Former::text("meds-search")
                        ->class("form-control input-group-sm")
                        ->placeholder("Search Medications")
                        ->label("Search for Medications")
                        
                    }}
                </div>
                <div class='col-sm-2 pull-left'> 
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
                </div>



                {{ Former::close()}}
                <div class="col-sm-8" id='search-window'>

                </div>
            </div>
        </div>
    </div>
        <div class='panel-default' >
            <div class='panel-body col-sm-6'>
                <div id='client-medications-pane'>
                    <table class='dtable display compact nowrap' id='client-meds-table'>
                        <thead>
                        <th>Product NDC</th>
                        <th>Name</th>
                        <th>Started</th>
                        <th>Stopped</th>
                    </thead>
                    @foreach($clientMedications as $medication )
                    <tr>
                    <td>{{$medication->productndc}}</td>
                    <td>
                    @if(Medication::find($medication->productndc)->PROPRIETARYNAME != "")
                    {{ Medication::find($medication->productndc)->PROPRIETARYNAME}}
                    @elseif(Medication::find($medication->productndc)->NONPROPRIETARYNAME != "")
                    {{ Medication::find($medication->productndc)->NONPROPRIETARYNAME}}
                    @elseif(Medication::find($medication->productndc)->SUBSTANCENAME != "")
                    {{ Medication::find($medication->productndc)->SUBSTANCENAME}}
                    @endif
                    </td>
                    <td>{{ $medication->started}}</td>
                    <td>{{ $medication->stopped}}</td>
                    </tr>
                    @endforeach  
                    </table>
                </div>
                
            </div>
                    <div class='panel-body'>
                        <div id="client-med-form">
                           @include('forms.medication.clientMedication', array('organizations'=>Organization::all(), 'contacts'=>Contact::all()))
                        </div>
                    
                    </div>
        </div>
        @overwrite