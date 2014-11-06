<?php

class HealthcareProviders extends \Eloquent {
    protected $connection='fcs_clients';
    protected $table = 'healthcareProviders';
    protected $fillable = ['mtk', 'providerType', 'org_id', 'contactId'];
    protected $primaryKey = 'mtk';
    protected function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

    protected function organization() {

        return $this->hasOne('Organization', 'org_id', 'org_id');
    }

    protected function contact() {
        return $this->hasOne('Contact', 'contact_id', 'contact_id');
    }

}
