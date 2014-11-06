<?php

class Address extends \Eloquent {

    protected $fillable = ['mtk', 'address_1', 'address_2', 'zip_code_id', 'created_at', 'updated_at'];
    
    protected $table = 'addresses';
    
    protected $connection = 'fcs_clients';
    
    protected $primaryKey = 'mtk';
    
    
    protected function client() {
        return $this->belongsTo('Client','mtk', 'mtk');
    }

    protected function zipcode() {
        return $this->hasOne('ZipCode', 'zip_codes_id', 'zip_code_id');
    }
    
}
