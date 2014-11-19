{{--$medication--}}<br />
<strong>
{{"National Drug Code: ".$medication->PRODUCTNDC}}<br />
{{"Product Type: ".$medication->PRODUCTTYPENAME}}<br />
{{"Proprietary Name: ".$medication->PROPRIETARYNAME." ".$medication->PROPRIETARYNAMESUFFIX}}<br />
{{"Non Proprietary Name: ".$medication->NONPROPRIETARYNAME}}<br />
{{"Dosage Form: ".$medication->DOSAGEFORMNAME}}<br />
{{"Substance Name: ".$medication->SUBSTANCENAME}}<br />
{{"Active Numerator Strength(s): ".$medication->ACTIVE_NUMERATOR_STRENGTH}}<br />
{{"Active Ingredient Unit(s): ".$medication->ACTIVE_INGRED_UNIT}}<br />
{{ "Pharmecuetical Class:".$medication->PHARM_CLASSES }}<br />
{{ "DEA Schedule: ".$medication->DEASCHEDULE}}<br /></strong>