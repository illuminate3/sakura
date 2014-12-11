<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder {

	public function run()
	{
		DB::table('fcs_clients.contacts')->truncate();

        $faker = Faker::create();
        $fakee = new Contact();
        foreach (range(1, 200) as $i) {
            foreach (range(1, 20) as $x){
               $fakee = Contact::create([
                
                'org_id' => $i,
                'first'  => $faker->firstName,
                'last'   => $faker->lastName,
                'phone'  => $faker->phoneNumber,
                'title'  => $faker->word,
                'specialization'  => $faker->word,
                'notes'  => $faker->text()
                
                
            ]);
                //echo json_encode($fakee);
                
            }   
            
            }
	}

}
