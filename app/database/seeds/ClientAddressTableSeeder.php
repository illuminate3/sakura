<?php

/* 
 * Copyright Jeremy Leach
 * Pegas Corp and Associates
 * 
 */


// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientAddressTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.address_client')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    ClientAddress::create([
				'address_id'            =>      $index,
				'mtk'                   =>      $index
				
			]);
		}
	}

}
