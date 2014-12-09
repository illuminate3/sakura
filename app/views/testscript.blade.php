
    
<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */
ClientsController::setCurrentClient(5);

$client = ClientsController::$current_client;
$med = $client->medication;
//$med->start = new \DateTime();
?>

{{ $client->name->first}}    
{{ $client->name->middle}}    
{{ $client->name->last}}
<br />
{{ $client->address->address->address1."  "}}
{{ $client->address->address->address2."<br/>"}}

{{ $client->address->address->zipcode->City."<br/>"}}
{{ $client->address->address->zipcode->State."  "}}
{{ $client->address->address->zipcode->ZIPCode."<br/>"}}
    <br />
    <h3> Current Medications</h3><br/>
    @foreach($client->medications as $medication)
    @if($medication->stopped == '0000-00-00') 
     {{$medication->stopped}}
{{ ucwords(strtolower($medication->medication->PROPRIETARYNAME))}} :  
    {{ ucwords(strtolower($medication->medication->SUBSTANCENAME))}}    <br />
@endif
    @endforeach
    
        <h3> Former Medications</h3><br/>
    @foreach($client->medications as $medication)

    @if($medication->stopped !== '0000-00-00') 
    {{$medication->stopped}}
{{ ucwords(strtolower($medication->medication->PROPRIETARYNAME))}} :  
    {{ ucwords(strtolower($medication->medication->SUBSTANCENAME))}}    <br />
@endif
    @endforeach
    
    <br />
    
    <h3>Client Providers </h3>
    
