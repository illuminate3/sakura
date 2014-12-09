<?php

class Organization extends \Eloquent {

    protected $fillable = ['org_id','title','description'];
    
    
    public static $key = 'org_id';
    
    protected $connection = 'fcs_clients';
    
    protected $table = 'organizations';
    
    protected $primaryKey = 'org_id';
    
   public function __toString() {
       return $this->title;
   }
    public function address(){
        return $this->hasOne('OrganizationAddress','org_id', 'org_id');
    }
    
    protected function zipcode() {
        return $this->hasOne('Zipcode', 'zip_code_id' ,'zip_code_id');
    }
    
    public function contact() {
        return $this->hasMany('Contact', 'org_id', 'org_id');
    }

    public function phone() {
        return $this->hasOne('OrganizationPhones', 'org_id', 'org_id');
    }

}
