
@foreach($medications as $medication)
<tr>
<td>{{$medication->PRODUCTNDC}}</td>
<td>{{$medication->PRODUCTTYPENAME}}</td>
<td>{{$medication->PROPRIETARYNAME ." ". $medication->PROPRIETARYNAMESUFFIX}}</td>
<td>{{$medication->NONPROPRIETARYNAME}}</td>
<td>{{$medication->DOSAGEFORMNAME}}</td>
<td>{{$medication->SUBSTANCENAME}}</td>
<td>{{$medication->ACTIVE_NUMERATOR_STRENGTH}}</td>
<td>{{$medication->ACTIVE_INGRED_UNIT}}</td>
<td>{{$medication->PHARM_CLASSES }}</td>
<td>{{$medication->DEASCHEDULE}}</td>
</tr>
@endforeach

