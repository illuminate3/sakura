

            <table id='searchtable' class='dtable display compact nowrap' >
                <thead>
                    <tr>
                        <th>NDC:</th>
                        <th>Market Name</th>
                        <th>Generic</th>
                        <th>DoseForm</th>
                        <th>Dose Unit(s)</th>

                    </tr>
                </thead>
                <tbody id='search-results-table' onclick=''>


@foreach($medications as $medication)
<tr>
<td>{{$medication->PRODUCTNDC}}</td>
<td>{{$medication->PROPRIETARYNAME ." ". $medication->PROPRIETARYNAMESUFFIX}}</td>
<td>{{$medication->NONPROPRIETARYNAME}}</td>
<td>{{$medication->DOSAGEFORMNAME}}</td>
<td>{{$medication->ACTIVE_NUMERATOR_STRENGTH."".$medication->ACTIVE_INGRED_UNIT}}</td>
</tr>
@endforeach


                </tbody>
            </table>

        </div>
    </div>
    <button id="add-medication" class=" btn btn-default btn-primary">Add Medication</button>

