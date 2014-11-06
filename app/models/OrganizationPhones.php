<?php

class OrganizationPhones extends \Eloquent {

    protected $fillable = ['org_id', 'local', 'tollfree','fax'];
    
    protected $table = 'organization_phones';
    
    protected $connection = 'fcs_clients'; 
    
    protected $primaryKey = 'org_id';
    
    protected function organization(){
        
        return $this->belongsTo('Organization','org_id', 'org_id');
        
    }

}
