@foreach($medications as $medication )
                    <ul>

                        <li>NDC: {{$medication->PRODUCTNDC}}</li>
                        <li>Market: {{$medication->PROPRIETARYNAME." ".$medication->PROPRIETARYNAMESUFFIX}}</li>
                        <li>Generic: {{$medication->NONPROPRIETARYNAME}}</li>
                        <li>Dose Form: {{$medication->DOSAGEFORMNAME}}</li>
                        <li>Substance: {{$medication->SUBSTANCENAME}}</li>
                        <li>Dose Size: {{$medication->ACTIVE_NUMERATOR_STRENGTH ." ". $medication->ACTIVE_INGRED_UNIT }} </li>
                        <li>Pharm Class: {{$medication->PHARM_CLASSES }}</li>
                        <li>DEA Shed.: {{$medication->DEASCHEDULE}}</li>

                    </ul>

@endforeach    
                    
                    
                    
                    