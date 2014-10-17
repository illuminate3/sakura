<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ClientAvailability
{
    
    protected $table = 'client_availability';
    
    protected $connection = 'fcs_clients';
    
    protected $fillable = ['mtk','editor_id','daystart', 'dayend', 'timestart', 'timeend', 'allday'];
   
    protected function client(){
        return $this->belongsTo('Client', 'mtk','mtk');
        
    }
    
    protected function editor(){
        return $this->hasOne('Staff', 'staff_id', 'editor_id');
    }
}