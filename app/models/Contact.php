<?php

class Contact extends \Eloquent {

    protected $fillable = ['org_id', 'contact_id', 'first', 'last', 'title'];
    protected $table = 'contacts';
    protected $connection = 'fcs_clients';

    protected function organization() {
        return $this->belongsTo('Organization', 'org_id', 'org_id');
    }

}
