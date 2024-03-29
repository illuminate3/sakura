<?php

class ClientAddress extends \Eloquent {

    protected $fillable = ['mtk', 'address_id'];
    protected $table = 'fcs_clients.address_client';
    protected $primaryKey = 'mtk';
    public function client() {
        return $this->belongsToMany('Client','address_client', 'mtk', 'mtk');
    }

    public function address() {
        return $this->hasOne('Address', 'address_id', 'address_id');
    }
    
}
