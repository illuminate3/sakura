@foreach($medications as $medication )
                    <ul>

                        <li>NDC: {{$medication->PRODUCTNDC}}</li>
                        <li>Proprietary Name: {{$medication->PROPRIETARYNAME." ".$medication->PROPRIETARYNAMESUFFIX}}</li>
                        <li>{{$medication->NONPROPRIETARYNAME}}</li>
                        <li>{{$medication->DOSAGEFORMNAME}}</li>
                        <li>{{$medication->SUBSTANCENAME}}</li>
                        <li>{{$medication->ACTIVE_NUMERATOR_STRENGTH ." ". $medication->ACTIVE_INGRED_UNIT }} </li>
                        <li>{{$medication->PHARM_CLASSES }}</li>
                        <li>{{$medication->DEASCHEDULE}}</li>

                    </ul>

@endforeach    
                    
                    
                    
                    