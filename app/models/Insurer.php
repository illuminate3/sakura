<?php

class Insurer extends \Eloquent {

    protected $fillable = ['insurer_id', 'insurer_name', 'contact_id', 'org_id'];
    protected $connection = 'fcs_clients';
    protected $table = 'insurers';
    protected $primaryKey = 'insurer_id';
    protected function contact() {

        return $this->hasOne('Contact', 'contact_id', 'contact_id');
    }

    protected function organization() {

        return $this->hasOne('Organization', 'org_id', 'org_id');
    }

}
