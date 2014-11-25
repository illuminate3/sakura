<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientMedicationTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_clients.client_meds')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            foreach (range(1, 15) as $med) {
            ClientMedication::create(array(
                'mtk'                => $index,
                'product_id'         => $index,
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
        }
        }
    }

}
