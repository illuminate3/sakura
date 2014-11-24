<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationPhonesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.organization_phones')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            
                OrganizationPhones::create([
                
                'org_id' => $index,
                'local' => $faker->phoneNumber,
                'tollfree' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber
                
            ]);
        
        }
	}

}
