<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationAddressTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.address_organization')->truncate();

        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            
               $address = OrganizationAddress::create([
                
                'address_id' => $index+200,
                   'org_id'  => $index,
                //'address1' => $faker->address,
                //'address2' => $faker->text,
                //'zip_code_id' => $faker->numberBetween(1,128)
               
                        
            ]);
                //$org = Organization::find($index-399); 
                //$org->address()->attach($index);
                
        
        }
	}

}
