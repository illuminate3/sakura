<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EmergencyContactsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.emergency_contacts')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    EmergencyContact::create([
				'mtk'            =>      $index,
				'full_name'		=>	$faker->firstName." ".$faker->lastName,
				'phone_number'		=>	$faker->phoneNumber,
				'relationship'		=>	$faker->word
			]);
		}
	}

}
