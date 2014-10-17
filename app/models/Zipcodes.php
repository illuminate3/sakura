<?php

class ZipCode extends \Eloquent {
    protected $connection = 'fcs_clients';
    protected $table = 'zip_codes';
    protected $fillable = ['zip_code_id', 'zipcode', 'city', 'state'];

    protected function address() {
        return $this->belongsToMany('Address');
    }

}
