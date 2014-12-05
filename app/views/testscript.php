<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */
use Faker\Factory as Faker;
//$medication = Input::get('medication');
//echo $medication;
DB::table('fcs_clients.client_meds')->truncate();

        $faker = Faker::create();

foreach (range(0, 200) as $index) {
            $client = Client::find($index);
            foreach (range(1, 15) as $med) {
                $medication  = Medication::find(rand($med,$med+$index))->PRODUCTNDC;
            $model = ClientMedication::create(array(
                'mtk'                => $index,
                'productndc'         => $medication,
                'started'            => $faker->date,
                'stopped'            => $faker->date,
                'client_note'        => $faker->text,
                'prescriber_notes'   => $faker->text,
                'org_id'             => $index,
                'contact_id'         => $index,
                'staff_id'           => $index,
                'staff_note'         => $faker->text,
                'additional_history' => $faker->text,
            ));
            
         echo $model."<BR />";
            
        }
        }
        
        $test = new ClientMedicationTableSeeder();