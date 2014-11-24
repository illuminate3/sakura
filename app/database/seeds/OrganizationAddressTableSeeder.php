<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationAddressTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.organization_addresses')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            
                OrganizationAddress::create([
                
                'org_id' => $index,
                'address1' => $faker->address,
                'address2' => $faker->text,
                'zip_code_id' => $faker->numberBetween(1,128)
                
            ]);
        
        }
	}

}
