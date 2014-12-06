<?php

class Address extends \Eloquent {

    protected $fillable = ['address_id', 'address1', 'address2', 'zip_code_id', 'created_at', 'updated_at'];
    
    protected $table = 'addresses';
    
    protected $connection = 'fcs_clients';
    
    protected $primaryKey = 'address_id';
    
    
    public function client() {
        return $this->belongsTo('Client','mtk', 'mtk');
    }

    public function zipcode() {
        return $this->hasOne('ZipCode', 'zip_codes_id', 'zip_code_id');
    }
    
}
