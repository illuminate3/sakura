<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

//$medication = Input::get('medication');
//echo $medication;
$term = Input::get('term');
$html = "";
$medications = Medication::where("SUBSTANCENAME", "LIKE", "%MORPHINE%")->take(15)->get();

foreach($medications as $medication)
{
    
   $html.="  <tr>";

$html.=                        "<td>".$medication->PRODUCTNDC."</td>";
$html.=                        "<td>".$medication->PRODUCTTYPENAME."</td>";
$html.=                        "<td>".$medication->PROPRIETARYNAME." ".$medication->PROPRIETARYNAMESUFFIX."</td>";
$html.=                        "<td>".$medication->NONPROPRIETARYNAME."</td>";
$html.=                        "<td>".$medication->DOSAGEFORMNAME."</td>";
$html.=                        "<td>".$medication->SUBSTANCENAME."</td>";
$html.=                        "<td>".$medication->ACTIVE_NUMERATOR_STRENGTH."</td>";
$html.=                        "<td>".$medication->ACTIVE_INGRED_UNIT."</td>";
$html.=                        "<td>".$medication->PHARM_CLASSES ."</td>";
$html.=                        "<td>".$medication->DEASCHEDULE."</td>";

$html.="</tr>";
    
}

echo $html;
