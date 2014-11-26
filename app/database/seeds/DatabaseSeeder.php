<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        //$this->call('UserTableSeeder');

        //$this->call('ClientTableSeeder');

        //$this->call('ClientNameTableSeeder');
        
        //$this->call('ClientAddressTableSeeder');
        
        //$this->call('ClientMedicationTableSeeder');

        //$this->call('ClientBirthdaysTableSeeder');
        
        $this->call('ClientPhonesTableSeeder');
        
        //$this->call('EmergencyContactsTableSeeder');
        
       // $this->call('AddressTableSeeder');

        
       
        //$this->call('ContactTableSeeder');
        
        //$this->call('OrganizationTableSeeder');

        //$this->call('OrganizationAddressTableSeeder');
        
        //$this->call('OrganizationPhonesTableSeeder');

        //$this->call('ProgramTableSeeder');
        
        $this->call('NeedTableSeeder');
        
        // $this->call('ZipCodesTableSeeder');
    }

}
