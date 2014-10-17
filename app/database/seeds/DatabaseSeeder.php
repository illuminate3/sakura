<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('UserTableSeeder');

        $this->call('ClientTableSeeder');

        $this->call('ClientNameTableSeeder');

        $this->call('AddressTableSeeder');

        $this->call('ZipCodesTableSeeder');

        $this->call('OrganizationTableSeeder');

        $this->call('OrganizationAddressTableSeeder');

        $this->call('ProgramTableSeeder');
        
        $this->call('NeedTableSeeder');
    }

}
