<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

//$medication = Input::get('medication');
//echo $medication;


$client = Client::find(5);

echo $client->mtk;


$med = ClientMedication::find(5);


$client->medications()->save($med);