<?php

class OrganizationAddress extends \Eloquent {

    protected $fillable = ['org_id', 'address_id'];
    
    protected $connection = 'fcs_clients';
    
    protected $table='address_organization';
    
    
    protected $primaryKey = 'org_id';
    
    protected function organization() {
        return $this->belongsTo('Organization', 'org_id', 'org_id');
    }
    
    protected function address(){
        return $this->hasOne('Address', 'address_id', 'address_id');
    }
    
    

}
