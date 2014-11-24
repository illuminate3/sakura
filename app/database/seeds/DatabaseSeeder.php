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

        $this->call('ClientBirthdaysTableSeeder');
        
        $this->call('EmergencyContactsTableSeeder');
        
        $this->call('AddressTableSeeder');

       // $this->call('ZipCodesTableSeeder');
        $this->call('ContactTableSeeder');
        
        $this->call('OrganizationTableSeeder');

        $this->call('OrganizationAddressTableSeeder');
        
        $this->call('OrganizationPhonesTableSeeder');

        $this->call('ProgramTableSeeder');
        
        $this->call('NeedTableSeeder');
    }

}
