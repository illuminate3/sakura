<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */



// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientBirthdaysTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.birthdays')->truncate();

		$faker = Faker::create();

		foreach(range(1, 200) as $index) {
                    ClientBirthday::create([
				'mtk'            =>      $index,
				'day'		=>	$faker->dayOfMonth,
				'month'		=>	$faker->month,
				'year'		=>	$faker->year,
				
			]);
		}
	}

}
