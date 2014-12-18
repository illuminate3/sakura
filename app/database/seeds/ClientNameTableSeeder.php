<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientNameTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.client_names')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    ClientName::create([
				'mtk'		=>	$index,
                                'first'         =>      $faker->firstName,
                                'middle'        =>      $faker->firstNameFemale,
                                'last'          =>      $faker->lastName
				
			]);
		}
	}

}