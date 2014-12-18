<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_clients.clients')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            Client::create([
                'mtk' => $index
            ]);
        }
    }

}
