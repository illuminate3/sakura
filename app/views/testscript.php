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


$client =  Client::find($id);

$phone = new \ClientPhone();
$phone->home = '666-5666';
$phone->work = '666-6266';
$phone->cell = '666-6656';


$client->phone()->save($phone);

echo $client;

echo $client->phone();