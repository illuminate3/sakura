<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

 //$medication = Input::get('medication');
 //echo $medication;

$id = Input::get('selected');


//$client =  Client::find($id);
//$client->phone = new ClientPhone(array('mtk'=>'5', 'home'=>'555-5555', 'cell'=>'555-5555', 'work'=> '555-5555'));
//$phone = (ClientPhone::find(5) !== null) ? 'fail' :  ClientPhone::find($id);

//echo $client->phone->home;

//echo $phone;
//$client = Client::find(5);
//if($client->emergencyContact() == null)
//{
 //   echo "relation is null";
//}else{
//    echo "relatioon is not null";
//}

//$emergencyContact = new EmergencyContact();
//var_dump($emergencyContact);

$client = \Client::find(1);
$clientAddress = new \Address();
var_dump($client->address);