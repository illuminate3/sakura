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
                <div id='meds-pane-details' class="pull-right col-sm-6">
                    <div class='panel pull-right' >Item Details
                        <div class='col-sm-3' id='med-details'>
                            </div>
                    </div></div>

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

            </div>
        </div>
        {{ Former::close()}}
        <div class="col-sm-4 col-xs-offset-1">

            <table id='searchtable' class='dtable display' >
                <thead>
                    <tr>
                        <th>NDC:</th>
                        <th>Type</th>
                        <th>Market Name</th>
                        <th>Generic</th>
                        <th>DoseForm</th>
                        <th>Substance Name</th>
                        <th>Dose Strength(s) </th>
                        <th>Ingredient Unit(s) </th>
                        <th>Drug Class </th>
                        <th>Schedule</th>

                    </tr>
                </thead>
                <tbody id='search-results-table' onclick='getSearchResults();'>


                </tbody>
            </table>

        </div>
    </div>
    <button id="add-medication" class=" btn btn-default btn-primary">Add Medication</button>

</div>
<div class ="row">
    <div class='col-sm-4 pull-left'>
        <table class="table table-condensed" id="medication-table">
            <thead>
                <tr>
                    <th>NDC:</th>
                    <th>Type</th>
                    <th>Market Name</th>
                    <th>Generic</th>
                    <th>DoseForm</th>
                    <th>Substance Name</th>
                    <th>Dose Strength(s) </th>
                    <th>Ingredient Unit(s) </th>
                    <th>Drug Class </th>
                    <th>Schedule</th>
                </tr>
            </thead>
            <tbody id="client-medication-table">
                
                    
                
            </tbody>
        </table>
    </div>
    

</div>

</div>
@overwrite