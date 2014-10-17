<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ZipCodesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.zip_codes')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    ZipCode::create([
				'zip_code_id'		=>	$index,
                                'city'                  =>      $faker->city,
                                'state'                 =>      $faker->state,
                                'zipcode'               =>      $faker->postCode
				
			]);
		}
	}

}
