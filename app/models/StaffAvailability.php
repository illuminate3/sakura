<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class StaffAvailability extends \Eloquent
{
    protected $fillable = ['staff_id','editor_id','daystart','dayend','timestart','timeend','allday'];
    protected $table = 'staff_availability';
    protected $connection = 'fcs_staff'; 
    protected $primaryKey = 'staff_id';    
    protected function staff(){
        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
        
    }
    
    protected function editor(){
        return $this->hasOne('Staff', 'staff_id', 'staff_id');
    }
    
    
}