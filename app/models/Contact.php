<?php

class Contact extends \Eloquent {

    protected $fillable = ['org_id', 'contact_id', 'first', 'last','phone', 'title'];
    protected $table = 'contacts';
    protected $connection = 'fcs_clients';
    protected $primaryKey = 'contact_id';
    protected function organization() {
        return $this->belongsTo('Organization', 'org_id', 'org_id');
    }

}
