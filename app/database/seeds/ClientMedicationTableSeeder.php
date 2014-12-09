<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientMedicationTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_clients.client_meds')->truncate();

        $faker = Faker::create();
            $medication = "";
        foreach (range(1, 20) as $index) {
            $client = Client::find($index);
            foreach (range(1, 5) as $medex) {
                $medications  = Medication::where('product_id','=', rand(0,$medex*$index))->take(1)->get();
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
                'org_id'             => $medex,
                'contact_id'         => $medex,
                'staff_id'           => rand(5,19),
                'staff_note'         => $faker->text,
                'additional_history' => $faker->text,
            ));
            $model->staff_id = rand(1,19);
            $model->org_id = rand(1,19);
            
            //var_dump($model);
            //echo "<br /> <br />";
            $client->medications()->save($model);
            
        }
        }
    }

}

