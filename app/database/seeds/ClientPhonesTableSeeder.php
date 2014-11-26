<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientPhonesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.client_phones')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    ClientPhone::create([
				'mtk'            =>     $index,
				'home'		=>	$faker->phoneNumber,
				'work'		=>	$faker->phoneNumber,
				'cell'		=>	$faker->phoneNumber
			]);
		}
	}

}
