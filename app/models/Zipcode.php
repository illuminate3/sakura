<?php

class Zipcode extends \Eloquent {

    protected $connection = 'codes';
    protected $table = 'zip_codes';
    protected $fillable = ['zip_codes_id', 'zipcode', 'city', 'state'];
    protected $primaryKey = 'zip_codes_id';

    protected function address() {
        return $this->belongsToMany('Address');
    }

}
