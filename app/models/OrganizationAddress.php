<?php

class OrganizationAddress extends \Eloquent {

    protected $fillable = ['org_id', 'address_id', 'zip_code_id'];
    
    protected $connection = 'fcs_clients';
    
    protected $table='organization_addresses';

    protected function organization() {
        return $this->belongsTo('Organization', 'org_id', 'org_id');
    }
    
    protected function address(){
        return $this->hasOne('Address', 'address_id', 'address_id');
    }
    
    protected function zipcode() {
        return $this->hasOne('Zipcode', 'zip_code_id' ,'zip_code_id');
    }

}
