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
                        <th>Med name</th>
                        <th>Generic</th>
                        <th>Substance</th>
                        
                    </thead>
                    @foreach($clientMedications as $medication )
                    <tr>
                    <td>{{$medication->productndc}}</td>
                    <td>{{ Medication::find($medication->productndc)->PROPRIETARYNAME}}</td>
                    <td>{{ Medication::find($medication->productndc)->NONPROPRIETARYNAME}}</td>
                    <td>{{ Medication::find($medication->productndc)->SUBSTANCENAME}}</td>
                    </tr>
                    @endforeach  
                    </table>
                </div>
                
            </div>
                    <div class='panel-body'>
                       
                           @include('forms.medication.clientMedication')
                     
                    
                    </div>
        </div>
        @overwrite