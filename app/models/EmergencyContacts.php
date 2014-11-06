<?php

class EmergencyContacts extends \Eloquent {

    protected $fillable = ['mtk', 'full_name', 'phone_number', 'relationship'];
    protected $connection = 'fcs_clients';
    protected $table = 'emergency_contacts';
protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
