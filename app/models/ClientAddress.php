<?php

class ClientAddress extends \Eloquent {

    protected $fillable = ['mtk', 'address_id'];
    protected $table = 'fcs_clients.client_addresses';
    protected $primaryKey = 'mtk';
    public function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

    public function address() {
        return $this->hasOne('Address', 'address_id', 'address_id');
    }
    
}
