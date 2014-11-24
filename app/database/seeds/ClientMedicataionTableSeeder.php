<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientMedicationTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_clients.clients')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            foreach (range(1, 15) as $med) {
            ClientMedication::create([
                'mtk' => $index,
                'product_id' => Medication::find($faker->numberBetween(0,258000)),
                'started'    => $faker->date(),
                'stopped'    => $faker->date(),
                'client_note' => $faker->words(),
                'referal_note' => $faker->words(),
                'staff_note' => $faker->words(),
                'additional_history' => $faker->words()
            ]);
        }
        }
    }

}
