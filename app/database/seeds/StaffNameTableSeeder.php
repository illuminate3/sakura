<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StaffNameTableSeeder extends Seeder {

    public function run() {
        DB::table('fcs_staff.names')->truncate();

        $faker = Faker::create();
            $name = "";
        foreach (range(1, 20) as $index) {
            $staff = Staff::find($index);
            $model = StaffName::create(array(
                'staff_id'                => $index,
                'first'              => $faker->firstName,
                'middle'            => $faker->firstName,
                'last'            => $faker->lastName,
                ));
            
            $staff->name()->save($model);
            
        }
        }
    }



