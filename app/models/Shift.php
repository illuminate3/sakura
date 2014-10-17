<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Shift extends \Cartalyst\Sentry\Users\Eloquent
{
    protected $fillable = ['staff_id','editor_id', 'daystart', 'dayend', 'allday', 'timestart','timeend'];
    
    protected $table = 'shifts';
    
    protected $connection = 'fcs_staff';
    
    protected function staff(){
        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
        
    }
    
    protected function editor(){
        return $this->hasOne('Staff', 'staff_id', 'editor_id');
        
    }
    
    
}