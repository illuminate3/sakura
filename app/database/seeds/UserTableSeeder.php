<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		Sentry::getUserProvider()->create([
			'staff_id'		=>	1,
			'username'		=>	'rich.rat',
			'email'			=>	'rrattary@fcsinc.me',
			'password'		=>	'1234567890',
			/*'first_name'	=>	'rich',
			'last_name'		=>	'rat',*/
			'activated'		=>	1,
			'paginate'		=>	10,
		]);

		Sentry::getUserProvider()->create([
			'staff_id'		=>	2,
			'username'		=>	'jleach',
			'email'			=>	'jleach@fcsinc.me',
			'password'		=>	'0987654321',
			/*'first_name'	=>	'rich',
			'last_name'		=>	'rat',*/
			'activated'		=>	1,
			'paginate'		=>	10,
		]);



		$faker = Faker::create();

		foreach(range(1, 20) as $index) {
			Sentry::getUserProvider()->create([
				'staff_id'		=>	$faker->unique()->numberBetween($min = 2, $max = 400),
				'username'		=>	$faker->unique()->userName,
				'email'			=>	$faker->unique()->email,
				'password'		=>	$faker->unique()->word,
				/*'first_name'	=>	$faker->firstName,
				'last_name'		=>	$faker->lastName,*/
				'activated'		=>	1,
				'paginate'		=>	10,
			]);
		}
	}

}
