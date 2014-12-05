<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ClientMedication Extends Eloquent
{
    protected $connection = 'fcs_clients';
    protected $table = 'client_meds';
    protected $fillable=['mtk','productndc','started','stopped','contact_id','client_note','referal_note','referer_id','staff_note','additional_history'];
    protected $primaryKey = 'id';
    
    public function client()
    {
        return $this->belongsTo('Client','mtk','mtk');
    }
    public function prescriber()
    {
        return $this->hasOne('Contact','contact_id','contact_id');
    }
    
    public function medication()
    {
        return $this->hasOne('Medication','productndc','productndc');
    }
    
    public function referer(){
        
        return $this->hasOne('Referer');
        
    }
    
    public function staff()
    {
        return $this->hasOne('Staff', 'staff_id', 'staff_id');
    }
    
    
    
}