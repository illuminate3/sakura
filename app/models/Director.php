<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Director extends Eloquent{
    
    protected $connection = 'fcs_staff';
    
    protected $table = 'directors';
    
    protected $fillable= ['staff_id'];
    
    public function staff(){
        return $this->hasOne(staff);
    }
    
    public function hierarchy(){
        
        return $this->belongsTo('Hierarchy', 'director_id', 'director_id');
        
    }
 
    
}

