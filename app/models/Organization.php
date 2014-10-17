<?php

class Organization extends \Eloquent {

    protected $fillable = ['org_id','title','description'];
    
    protected $connection = 'fcs_clients';
    
    protected $table = 'organizations';
    
    protected $primaryKey = 'org_id';
    
    protected function address() {
        return $this->hasOne('OrganizationAddress', 'org_id', 'org_id');
    }

    protected function contact() {
        return $this->hasMany('Contacts', 'org_id', 'org_id');
    }

    protected function phone() {
        return $this->hasOne('OrganizationPhones', 'org_id', 'org_id');
    }

}
