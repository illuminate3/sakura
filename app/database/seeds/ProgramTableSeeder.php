<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProgramTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.programs')->truncate();

		$faker = Faker::create();

		foreach(range(1, 6) as $index) {
                    Program::create([
				'program_id'		=>	$index,
                                'title'                 =>      $faker->company,
                                'description'           =>      $faker->realText()
				
			]);
		}
	}

}