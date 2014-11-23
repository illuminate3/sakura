<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AddressTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.addresses')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    Address::create([
				'address_id'            =>      $index,
				'address1'		=>	$faker->streetAddress,
				'address2'		=>	$faker->word,
				'zip_code_id'		=>	$index
			]);
		}
	}

}
