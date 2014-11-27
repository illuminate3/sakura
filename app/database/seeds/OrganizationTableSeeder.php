<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_clients.organizations')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            Organization::create([
                'org_id' => $index,
                'title' => $faker->company . ' ' . $faker->companySuffix,
                'description' => $faker->realText(),
                //'address_id'  => $faker->numberBetween(0,200),
               // 'zip_code_id' => $index
            ]);
        }
        
    }

}
