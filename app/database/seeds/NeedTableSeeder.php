<?php
use Faker\Factory as Faker;
/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class NeedTableSeeder extends Seeder {
    public function run()
    {
    $faker = Faker::create();
    DB::table('fcs_clients.needs')->truncate();
    
    foreach(range(0,200) as $index)
    {
        Need::create([
            
            'title'         => $faker->company,
            'description'   => $faker->realText()
            
            
        ]);
        
        
    }
    }
    
    
    
}