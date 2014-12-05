<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientMedicationTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_clients.client_meds')->truncate();

        $faker = Faker::create();
            $medication = "";
        foreach (range(1, 200) as $index) {
            $client = Client::find($index);
            foreach (range(1, 15) as $med) {
                $medications  = Medication::where('product_id','=', rand(0,$med*$index))->take(1)->get();
                foreach($medications as $med)
                {
                    $medication = $med->PRODUCTNDC;
                }
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
            
            $client->medications()->save($model);
            
        }
        }
    }

}

