<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.contacts')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            
                Contact::create([
                
                'org_id' => $faker->numberBetween(0,123),
                'first'  => $faker->firstName,
                'last'   => $faker->lastName,
                'title'  => $faker->opera
                
                
            ]);
        
        }
	}

}
