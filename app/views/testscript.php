<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

//$medication = Input::get('medication');
//echo $medication;

$faker = \Faker::create();

foreach (range(1, 200) as $index) {
    foreach (range(1, 15) as $med) {
        $med = ClientMedication::create([
                    'mtk' => $index,
                    'product_id' => Medication::find($faker->numberBetween(0, 258000)),
                    'started' => $faker->date(),
                    'stopped' => $faker->date(),
                    'client_note' => $faker->words(),
                    'referal_note' => $faker->words(),
                    'staff_note' => $faker->words(),
                    'additional_history' => $faker->words()
        ]);
        var_dump($med);
    }
}


echo $html;
